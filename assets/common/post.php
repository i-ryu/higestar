<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/follow.php") ;

class Post{
	var $db ;
	var $user_id ;

	function __construct($id){
		$this->user_id = htmlspecialchars($id) ;
		$this->db = new Database() ;
	}


	function upload($upfile){
	     // POSTではないとき何もしない
		// if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') !== 'POST') {
		// 	return;
		// }

	     // テキスト
		$content = filter_input(INPUT_POST, 'content');
		// if ('' === $content) {
		// 	throw new Exception('てきすとは入力必須です。');
		// }

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
			, "./assets/img"
			, $filename
			, $ext
		);

	    // アップロードディレクトリに移動
		if (!move_uploaded_file($tmp_name, $destination)) {
			throw new Exception('ファイルの保存に失敗しました。');
		}

		// データ追加
		$this->db->connect() ;
		$stmt = $this->db->dbh->prepare("INSERT INTO posts(content,img_path,user_id) VALUES (?, ?, ?)");
		$result = $stmt->execute(array($content, $destination,$this->user_id));
		$this->db->disconnect() ;

    	// 成功時にページを移動する
		//header("location: higesta/") ;
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
			$stmt = $this->db->dbh->prepare("SELECT * FROM posts WHERE user_id = ?") ;
			$stmt->execute(array($f["id"]));
			$posts = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
			
			foreach($posts as $post){
				$post["user_name"] = $f["user_name"] ;
				array_push($post_set,$post) ;				
			}
		}
		$this->db->disconnect() ;

		return $post_set ;		

	}

}
