<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;

class User{
	var $db ;
	var $id ;
	var $user_id ;
	var $name ;
	var $email ;
	var $img_path ;
	var $content ;
	var $post ;
	var $message ;
	var $like ;
	var $follow ;

	function __construct($id){
		$this->id = htmlspecialchars($id) ;
		$this->db = new Database() ;
		$this->find() ;
		$this->post = new Post($id) ;
		$this->message = new Message($id) ;
		$this->like = new Like() ;
		$this->follow = new follow($id) ;
	}

	function find(){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("SELECT * FROM users WHERE id = ?");
		$stmt->execute(array($this->id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		$this->user_id = $result["user_id"] ;
		$this->name = $result["user_name"] ;
		$this->password = $result["password"] ;
		$this->email = $result["email"] ;
		$this->img_path = $result["img_path"] ;
		$this->content = $result["content"] ;

		$this->db->disconnect() ;
	}

	function password_check($password){
		$this->db->connect() ;
		$sql = "SELECT * FROM users WHERE id = ?" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;
		//var_dump($result) ;
		// もしデータがあれば、
		if ($result) {
			// もしパスワードがあっていれば、
			if (password_verify($password, $result['password'])) {
				session_regenerate_id(true);
				return true ;
			} else {
				return false ;
			}
		}else{
			return false ;
		}

		$this->db->disconnect() ;

	}

	function update($new_id,$name,$email,$password){
		// パスワードが一致しているか確認
		var_dump($this->password_check($password)) ;
		if($this->password_check($password)){
			$this->db->connect() ;

			$stmt = $this->db->dbh->prepare("
				UPDATE users SET 
				user_id = ?
				, user_name = ?
				, email = ?
				WHERE id = ?");

			$params = array(
				$new_id
				, $name
				, $email
				, $this->id
			);

			$stmt->execute($params);

			$this->db->disconnect() ;

		}

	}
}

class UserSet{
	var $db ;

	function __construct(){
		$this->db = new Database() ;
	}

	function all_find_users(){
		$users = [] ;

		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("SELECT id,user_id,user_name FROM users");
		$stmt->execute();
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		$this->db->disconnect() ;

		return $users ;
	}

}


?>