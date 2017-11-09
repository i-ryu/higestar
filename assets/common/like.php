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


	function best_save($post_id){
		$sql = "INSERT INTO best_likes (user_id, post_id) VALUES (?, ?)" ;
		parent::insert($sql,[$this->user_id,$post_id]) ;
	}


	function remove(){
		parent::connect() ;
		$stmt = $this->dbh->prepare("DELETE FROM ".$this->table_name."(user_id, post_id) VALUES (?, ?)");
		$stmt->execute([$user_id, $post_id]);
		parent::disconnect() ;
	}

	function user_likes(){

		$sql = "SELECT post_id FROM likes WHERE user_id = ?" ;
		$likes_id = parent::select($sql,[$this->user_id]) ;

		$posts = [] ;
		foreach ($likes_id as $like) {
			$sql2 = "SELECT users.img_path user_img,users.user_name, posts.content, posts.img_path,posts.created,posts.id
			FROM posts 
			JOIN users ON posts.user_id = users.id
			WHERE posts.id = ?" ;
			foreach (parent::select($sql2,[$like["post_id"]]) as $post) {
				array_push($posts,$post)  ;
			}
		}
		return $posts ;
	}

	function best_like_display(){
		$sql = "SELECT * FROM ".$this->table_name." LIMIT 5" ;
		return parent::select($sql,[]) ;
	}

	function check_today($post_id){
		$sql = "SELECT * FROM best_likes WHERE user_id = ? AND post_id = ? AND created <> '2017-11-09';" ;
		$result = parent::select($sql,[$this->user_id,$post_id]) ;

		if($result != []){
			echo false ;
		}else{
			echo true ;
		}
	}

	function count(){
		$sql = "SELECT count(*) c FROM ".$this->table_name." WHERE user_id = ?" ;
		return parent::select($sql,[$this->user_id])[0]["c"] ;
	}

	function liked_count(){
		$sql = "SELECT count(*) c 
		FROM best_likes 
		JOIN posts ON best_likes.post_id = posts.id
		WHERE posts.user_id = ?" ;
		$result = parent::select($sql,[$this->user_id])[0]["c"] ;		
		var_dump($result) ;
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

	function best_post_check(){
		$sql = "SELECT * FROM best_likes WHERE post_id = ? AND user_id = ?" ;
		$result = parent::select($sql,[$post_id,$this->user_id]) ;

		if($result == false){
			return false ;
		}else{
			return true ;
		}

	}
}

?>