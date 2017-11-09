<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/follow.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/setting.php") ;

class Post extends Setting{
	var $user_id ;
	var $table_name ;

	function __construct($id){
		parent::__construct();
		$this->user_id = htmlspecialchars($id) ;
		$this->table_name = "posts" ;
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
		parent::connect() ;
		$stmt = $this->dbh->prepare("INSERT INTO ".$this->table_name." (content,img_path,user_id) VALUES (?, ?, ?)");
		$result = $stmt->execute(array($content, $img_path,$this->user_id));
		parent::disconnect() ;

    	// 成功時にページを移動する
		header("location: ".$this->domain) ;
	}

	function display(){
		// 画像データ取得
		// データ追加
		parent::connect() ;
		$stmt = $this->dbh->prepare("SELECT img_path FROM ".$this->table_name." WHERE user_id = ?");
		$result = $stmt->execute(array($this->user_id));
		$path_set = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
		parent::disconnect() ;
		return $path_set ;

	}

	function post_get(){
		// トムさんに聞く 時系列順になっていない。
		parent::connect() ;

		$follow = new Follow($this->user_id) ;
		$followers = $follow->timelime_users() ;

		$post_set = [] ;
		$key_id = [] ;
		foreach ($followers as $f) {
			$stmt = $this->dbh->prepare("SELECT * FROM posts WHERE user_id = ? ORDER BY created DESC") ;
			$stmt->execute(array($f["id"]));
			$posts = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
			
			foreach($posts as $post){
				$sql = "SELECT img_path FROM users WHERE id = ?" ;
				$stmt = $this->dbh->prepare($sql);
				$stmt->execute([$f["id"]]);
				$user_img = $stmt->fetch(PDO::FETCH_ASSOC)["img_path"] ;

				$post_date = date_create($post["created"]);
				$now = date_create(date("Y-m-d H:i:s"));
				$interval = date_diff($post_date, $now);
				$post["diff"] = $interval->format("%d日%h時間%i分%s秒");
				$post["user_name"] = $f["user_name"] ;
				$post["user_img"] = $user_img ;
				array_push($post_set,$post) ;				
			}
		}
		// foreachで1つずつ値を取り出す
		foreach ($post_set as $key => $value) {
			$id[$key] = $value['created'];
		}
		array_multisort($id, SORT_DESC, $post_set);

		parent::disconnect() ;

		return $post_set ;		

	}

	function search_get($q){
		$sql = "SELECT * FROM".$this->table_name."WHERE content LIKE '%". $q ."%' ORDER BY created DESC" ;
		return parent::select($sql,[]) ;	

	}

	function user_get(){
		$sql = "SELECT posts.img_path,users.img_path user_img,users.user_name,posts.content,posts.created,users.id 
		FROM ".$this->table_name."
		JOIN users ON posts.user_id = users.id
		WHERE users.id = ?" ;
		return parent::select($sql,[$this->user_id]) ;
	}


}
