<?php 

require_once("db_connect.php") ;

class Follow{
	var $user_id ;
	var $db ;

	function __construct($id){
		$this->user_id = $id;
		$this->db = new Database() ;
	}

	function follow($follow_id){

		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("INSERT INTO follows(user_id, follow_id) VALUES (?, ?)");

		$stmt->execute(array($this->user_id, $follow_id));

		$this->db->disconnect() ;
	} 

	function states_check($follow_id){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("SELECT * FROM follows WHERE user_id = ?,follow_id = ?");
		$stmt->execute(array($this->user_id,$follow_id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		if(isset($result)){
			return true ;
		}elseif (!isset($result)) {
			return false ;
		}
	}

	function get_follow(){
		// フォローの
		$this->db->connect() ;
		$sql = "SELECT follow_id FROM users JOIN follows ON users.user_id = follows.user_id WHERE users.user_id = ?" ;
		$stmt = $this->db->dbh->prepare($sql);
		// $stmt->execute(array($this->user_id,$this->user_id));
		$stmt->execute(array($this->user_id));
		$follow_user_id_list = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		$users = [] ;

		foreach ($follow_user_id_list as $follow_user_id) {
			$stmt = $this->db->dbh->prepare("SELECT user_name,user_id FROM users WHERE user_id = ?");
			$stmt->execute(array($follow_user_id["follow_id"]));
			$result = $stmt->fetch(PDO::FETCH_ASSOC) ;
			array_push($users,$result) ;
		}

		return  $users;
	}

}
?>