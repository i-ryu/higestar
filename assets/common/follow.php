<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;

class Follow{
	var $id ;
	var $db ;

	function __construct($id){
		$this->id = $id;
		$this->db = new Database() ;
	}

	function follow($follow_id){

		$this->db->connect() ;
		$stmt = $this->db->dbh->prepare("INSERT INTO follows(user_id, follow_id) VALUES (?, ?)");
		$stmt->execute(array($this->id, $follow_id));
		$this->db->disconnect() ;
		header("location: users.php?id=".$follow_id) ;
	} 

	function unfollow($unfollow_id){

		$this->db->connect() ;
		$stmt = $this->db->dbh->prepare("DELETE FROM follows WHERE user_id = ? AND follow_id = ?");
		$stmt->execute(array($this->id, $unfollow_id));
		$this->db->disconnect() ;
		header("location: users.php?id=".$unfollow_id) ;
	} 


	function is_follow($follow_id){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("SELECT * FROM follows WHERE user_id = ? AND follow_id = ?");
		$stmt->execute(array($this->id,$follow_id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		if($result != false){
			return true ;
		}elseif ($result == false) {
			return false ;
		}
	}

	function get_follow(){
		$this->db->connect() ;
		// $sql = "SELECT follows.*,users.* FROM follows JOIN users ON follows.user_id = users.id WHERE 1" ;
		// $sql = "SELECT users.id,users.user_name FROM follows JOIN users ON follows.user_id = users.id WHERE 1" ;
		$sql = "SELECT follow_id FROM follows WHERE user_id = ?" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->id));
		$follow_id_list = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		$users = [] ;

		foreach ($follow_id_list as $f) {
			$stmt = $this->db->dbh->prepare("SELECT users.user_name,users.id,users.user_id FROM users WHERE id = ?");
			$stmt->execute(array($f["follow_id"]));
			$result = $stmt->fetch(PDO::FETCH_ASSOC) ;
			array_push($users, $result) ;
		}
		return  $users;
	}

	function get_follower(){
		$this->db->connect() ;
		// $sql = "SELECT follows.*,users.* FROM follows JOIN users ON follows.follow_id = users.id WHERE 1" ;
		// $sql = "SELECT users.id,users.user_name FROM follows JOIN users ON follows.user_id = users.id WHERE 1" ;
		$sql = "SELECT user_id FROM follows WHERE follow_id = ?" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->id));
		$follower_id_list = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		$users = [] ;

		foreach ($follower_id_list as $f) {
			$stmt = $this->db->dbh->prepare("SELECT users.user_name,users.id FROM users WHERE id = ?");
			$stmt->execute(array($f["user_id"]));
			$result = $stmt->fetch(PDO::FETCH_ASSOC) ;
			array_push($users, $result) ;
		}
		return  $users;
	}


}
?>