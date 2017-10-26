<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/follow.php") ;

class Post{
	var $db ;
	var $user_id ;
	var $domain ;

	function __construct($id){
		$this->user_id = htmlspecialchars($id) ;
		$this->db = new Database() ;
		$this->domain = "http://higesta.com/" ;
	}

	function upload($content,$upfile){

		if ($upfile['error'] > 0) {
			throw new Exception('ファイルアップロードに失敗しました。');
		}

		$tmp_name = $upfile['tmp_name'];

	    // ファイルタイプチェック
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$mimetype = finfo_file($finfo, $tmp_name);

    	// 許可するMIMETYPE
		$allowed_types = [
			'jpg' => 'image/jpeg'
			, 'png' => 'image/png'
			, 'gif' => 'image/gif'
		];
		if (!in_array($mimetype, $allowed_types)) {
			throw new Exception('許可されていないファイルタイプです。');
		}

	    // ファイル名（ハッシュ値でファイル名を決定するため、同一ファイルは同盟で上書きされる）
		$filename = sha1_file($tmp_name);

    	// 拡張子
		$ext = array_search($mimetype, $allowed_types);

	    // 保存先ファイルパス
		$destination = sprintf('%s/%s.%s'
			, $dir = $_SERVER["DOCUMENT_ROOT"]."user_images/".$this->user_id
			, $filename
			, $ext
		);

	    // アップロードディレクトリに移動
		if (!move_uploaded_file($tmp_name, $destination)) {
			throw new Exception('ファイルの保存に失敗しました。');
		} ;

		$img_path = "user_images/".$this->user_id."/".$filename.".".$ext ;

		// データ追加
		$this->db->connect() ;
		$stmt = $this->db->dbh->prepare("INSERT INTO posts(content,img_path,user_id) VALUES (?, ?, ?)");
		$result = $stmt->execute(array($content, $img_path,$this->user_id));
		$this->db->disconnect() ;

    	// 成功時にページを移動する
		header("location: ".$this->domain) ;
	}

	function display(){
		$this->db->connect() ;
		// 画像データ取得
		// データ追加
		$stmt = $this->db->dbh->prepare("SELECT img_path FROM posts WHERE user_id = ?");
		$result = $stmt->execute(array($this->user_id));
		$path_set = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
		$this->db->disconnect() ;
		return $path_set ;

	}

	function post_get(){
		$this->db->connect() ;

		$follow = new Follow($this->user_id) ;
		$followers = $follow->get_follower() ;

		$post_set = [] ;

		foreach ($followers as $f) {
			$stmt = $this->db->dbh->prepare("SELECT * FROM posts WHERE user_id = ? ORDER BY created DESC") ;
			$stmt->execute(array($f["id"]));
			$posts = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
			
			foreach($posts as $post){
				$post_date = date_create($post["created"]);
				$now = date_create(date("Y-m-d H:i:s"));
				$interval = date_diff($post_date, $now);
				$post["diff"] = $interval->format("%d日%h時間%i分%s秒");
				$post["user_name"] = $f["user_name"] ;
				array_push($post_set,$post) ;				
			}
		}
		$this->db->disconnect() ;

		return $post_set ;		

	}

}
