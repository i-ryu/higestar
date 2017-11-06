<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/setting.php") ;

class Like extends Setting{
	var $user_id ;
	var $table_name ;

	function __construct($id){
		parent::__construct() ;
		$this->user_id = $id ;
		$this->table_name = "likes" ;
	}

	function save($post_id){
		$sql = "INSERT INTO ".$this->table_name." (user_id, post_id) VALUES (?, ?)" ;
		parent::insert($sql,[$this->user_id, $post_id]) ;
	}


	function best_save($user_id,$post_id){
		$sql = "INSERT INTO best_likes (user_id, post_id) VALUES (?, ?)" ;
		parent::insert($sql,[$user_id,$post_id]) ;
	}


	function remove(){
		parent::connect() ;
		$stmt = $this->dbh->prepare("DELETE FROM ".$this->table_name."(user_id, post_id) VALUES (?, ?)");
		$stmt->execute([$user_id, $post_id]);
		parent::disconnect() ;
	}

	function user_likes(){
		// 修正必要
		parent::connect() ;
		$sql = "
		SELECT users.user_name,users.id,posts.created,posts.content
		FROM posts
		JOIN likes ON users.id = likes.user_id
		JOIN users ON users.id = posts.user_id
		WHERE posts.user_id = ?" ;
		return parent::select($sql,[$this->user_id]) ;
	}

	function best_like_display(){
		$sql = "SELECT * FROM ".$this->table_name." LIMIT 5" ;
		return parent::select($sql,[]) ;
	}

	function count(){
		$sql = "SELECT count(*) c FROM ".$this->table_name." WHERE user_id = ?" ;
		return parent::select($sql,[$this->user_id])[0]["c"] ;
	}


	function post_check($post_id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE post_id = ? AND user_id = ?" ;
		$result = parent::select($sql,[$post_id,$this->user_id]) ;

		if($result == false){
			return false ;
		}else{
			return true ;
		}
		
	}
}

?>