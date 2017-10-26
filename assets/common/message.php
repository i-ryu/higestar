<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;

class Message{
	var $id ;
	var $db ;

	function __construct($id){
		$this->id = $id;
		$this->db = new Database() ;
	}

	function get_users(){
		$this->db->connect() ;

		$sql = "SELECT DISTINCT receive_id FROM messages" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->id));
		$messages = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		for($i = 0 ; $i < count($messages); $i++){
			if($messages[$i]["receive_id"] == $this->id){
				unset($messages[$i]);
			}
		}

		$users = [] ;
		foreach ($messages as $m) {
			$stmt = $this->db->dbh->prepare("SELECT user_name,id FROM users WHERE id = ?");
			$stmt->execute(array($m["receive_id"])) ;
			$user = $stmt->fetch(PDO::FETCH_ASSOC) ;

			array_push($users,$user) ;
		}

		$this->db->disconnect() ;

		return $users ;
	}

	function get(){
		$this->db->connect() ;

		$sql = "SELECT user_id,receive_id,content FROM messages WHERE receive_id = ? OR user_id = ? ORDER BY created DESC" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->id,$this->id));
		$messages = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		$this->db->disconnect() ;

		return $messages ;
	}

	function send($receice_id,$content){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("INSERT INTO messages (user_id, receive_id, content) VALUES (?, ?, ?)");

		$stmt->execute(array($this->id, $receice_id, $content));
		$this->db->disconnect() ;

	}
}

?>