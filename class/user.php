<?php

require_once("db_connect.php") ;

class User{
	var $db ;
	var $id ;
	var $user_id ;
	var $name ;
	var $email ;


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

		$this->db->disconnect() ;
	}

	function sign_up($user_name,$password,$password2){
		$this->name = $user_name ;
		if (empty($this->name)) 
			return "ユーザー名が未入力です。";
		else if (empty($password) || empty($password2))
			return "パスワードが未入力です。";


		if (
			!empty($this->name) 
			&& !empty($password) 
			&& !empty($password2) 
			&& $password === $password2) 
		{
			$this->db->connect() ;

			$stmt = $this->db->dbh->prepare("INSERT INTO user(user_name,user_id, user_password) VALUES (?, ?, ?)");

			$stmt->execute(array($this->name, $this->id, password_hash($password, PASSWORD_DEFAULT)));

			return  "登録が完了しました。あなたの登録IDは".$this->id."です。";  

		} else if($password != $password2) {
			return "パスワードが一致しません。" ;
		}
		return "エラー" ;

		$this->db->disconnect() ;

	}


	function update_profile($new_id,$name,$email,$room_num,$course,$team_id,$s_date,$e_date){
		$this->db->connect() ;
		$stmt = $this->db->dbh->prepare("
			UPDATE user SET 
			user_id = ?
			, user_name = ?
			, room_number = ?
			, start_date = ?
			, end_date = ?
			, course = ?
			, team_id = ?
			WHERE user_id = ?");
		
		$params = array(
			$new_id
			, $name
			, $room_num
			, $s_date
			, $e_date
			, $course
			, $team_id
			, $this->id
		);

		$stmt->execute($params);

		$this->db->disconnect() ;
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