<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/setting.php") ;

class Follow extends Setting{
	var $id ;
	var $table_name ;

	function __construct($id){
		parent::__construct() ;
		$this->id = $id;
		$this->table_name = "follows" ;
	}

	function add($follow_id){
		$sql = "INSERT INTO ".$this->table_name." (user_id, follow_id) VALUES (?, ?)" ;
		parent::insert($sql,[$this->id, $follow_id]) ;
	} 

	function remove($unfollow_id){
		parent::connect() ;
		$stmt = $this->dbh->prepare("DELETE FROM ".$this->table_name." WHERE user_id = ? AND follow_id = ?");
		$stmt->execute([$this->id, $unfollow_id]);
		parent::disconnect() ;
	} 


	function is_follow($follow_id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE user_id = ? AND follow_id = ?" ;
		$result = parent::select($sql,[$follow_id,$this->id]) ;

		if($result != false){
			return true ;
		}elseif ($result == false) {
			return false ;
		}
	}

	function follow_check($follow_id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE user_id = ? AND follow_id = ?" ;
		$result = parent::select($sql,[$this->id,$follow_id]) ;

		if($result != false){
			return true ;
		}elseif ($result == false) {
			return false ;
		}
	}


	function get_follow(){

		$sql = "SELECT users.id,users.user_id,users.user_name,users.img_path
		FROM ".$this->table_name."
		JOIN users ON users.id = follows.follow_id
		WHERE follows.user_id = ?" ;

		return parent::select($sql,[$this->id]) ;
	}

	function timelime_users(){
		$users = $this->get_follow() ;

		$sql = "SELECT id,user_id,user_name,img_path FROM users WHERE id = ?" ;
		$me = parent::select($sql,[$this->id]) ;
		array_push($users, $me[0]) ;
		return $users ;
	}

	function get_follower(){

		$sql = "SELECT users.id,users.user_id,users.user_name,users.img_path
		FROM ".$this->table_name."
		JOIN users ON users.id = follows.user_id
		WHERE follows.follow_id = ?" ;

		$users = parent::select($sql,[$this->id]) ;
		return  $users;
	}


}
?>