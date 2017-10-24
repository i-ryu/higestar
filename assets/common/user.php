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

	function __construct($id){
		$this->id = htmlspecialchars($id) ;
		$this->keys = [
			"user_id" => "ユーザーID"
			, "name" => "ユーザー名"
			, "email" => "メールアドレス"
		] ;
		$this->db = new Database() ;
		$this->find() ;

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

	function sign_up($user_name,$password,$password2){
		$this->name = $user_name ;
		if (empty($this->name)) 
			return false ;
		else if (empty($password) || empty($password2))
			return false ;


		if (
			!empty($this->name) 
			&& !empty($password) 
			&& !empty($password2) 
			&& $password === $password2) 
		{
			$this->db->connect() ;

			$stmt = $this->db->dbh->prepare("INSERT INTO users(user_name,user_id, user_password) VALUES (?, ?, ?)");

			$stmt->execute(array($this->name, $this->id, password_hash($password, PASSWORD_DEFAULT)));

			return  true ;

		} else if($password != $password2) {
			return false ;
		}
		$this->db->disconnect() ;

		return false ;
	}

	function password_check($password){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("INSERT INTO users(user_name,user_id, user_password) VALUES (?, ?, ?)");

		$stmt->execute(array($this->name, $this->id, password_hash($password, PASSWORD_DEFAULT)));

		$this->db->disconnect() ;

	}


	function update($new_id,$name,$email,$password){
		// パスワードが一致しているか確認
		if($this->password_check()){
			$this->db->connect() ;

			$stmt = $this->db->dbh->prepare("
				UPDATE users SET 
				user_id = ?
				, user_name = ?
				, user_email = ?
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