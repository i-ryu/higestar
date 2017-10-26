<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;

class Like{
	var $user_id ;
	var $post_id ;
	var $db ;

	function __construct(){
		$this->db = new Database() ;
	}

	function save($user_id,$post_id){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("INSERT INTO likes (user_id, post_id) VALUES (?, ?)");

		$stmt->execute(array($user_id, $post_id));
		$this->db->disconnect() ;
	}

	function remove(){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("DELETE FROM likes (user_id, post_id) VALUES (?, ?)");

		$stmt->execute(array($user_id, $post_id));
		$this->db->disconnect() ;
	}

	function user_likes($user_id){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("SELECT post_id FROM likes WHERE user_id = ?");

		$stmt->execute(array($user_id));
		$post_id_set = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		$posts = [] ;

		foreach ($post_id_set as $p) {
			$stmt = $this->db->dbh->prepare("SELECT * FROM posts WHERE id = ?");
			$stmt->execute(array($p["post_id"]));
			$post = $stmt->fetch(PDO::FETCH_ASSOC) ;			
			array_push($posts, $post) ;
		}
		$this->db->disconnect() ;

		return $posts ;

	}
}

?>