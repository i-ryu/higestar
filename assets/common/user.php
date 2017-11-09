<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/setting.php") ;

class User extends Setting{
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
		parent::__construct() ;
		$this->id = htmlspecialchars($id) ;
		$this->find() ;
		$this->post = new Post($id) ;
		$this->message = new Message($id) ;
		$this->like = new Like($id) ;
		$this->follow = new follow($id) ;

		$this->notice() ;
	}

	function find(){
		parent::connect() ;

		$stmt = $this->dbh->prepare("SELECT * FROM users WHERE id = ?");
		$stmt->execute(array($this->id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		$this->user_id = $result["user_id"] ;
		$this->name = $result["user_name"] ;
		$this->password = $result["password"] ;
		$this->email = $result["email"] ;
		$this->img_path = $result["img_path"] ;
		$this->content = $result["content"] ;

		parent::disconnect() ;
	}

	function password_check($password){
		parent::connect() ;
		$sql = "SELECT * FROM users WHERE id = ?" ;
		$stmt = $this->dbh->prepare($sql);
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

		parent::disconnect() ;

	}

	function update($new_id,$name,$email,$password){
		// パスワードが一致しているか確認
		var_dump($this->password_check($password)) ;
		if($this->password_check($password)){
			parent::connect() ;

			$stmt = $this->dbh->prepare("
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

			parent::disconnect() ;

		}
	}

	function notice(){

		$sql = "
		SELECT * 
		FROM users
		JOIN likes ON users.id = likes.user_id
		JOIN follows ON users.id = follows.follow_id
		WHERE users.id = ?
		ORDER BY created DESC" ;
		$result = parent::select($sql,[$this->id]) ;
	}

	function all_user_img(){
		$sql = "SELECT img_path FROM posts" ;
		return parent::select($sql,[]) ;
	}
}

class UserSet extends Setting{

	function __construct(){
	}

	function all_find_users(){
		$users = [] ;

		parent::connect() ;

		$stmt = $this->dbh->prepare("SELECT id,user_id,user_name FROM users");
		$stmt->execute();
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		parent::disconnect() ;

		return $users ;
	}

}


?>