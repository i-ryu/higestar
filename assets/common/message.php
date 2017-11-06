<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/setting.php") ;

class Message extends Setting{
	var $id ;

	function __construct($id){
		parent::__construct() ;
		$this->id = $id;
	}

	function get_users(){
		parent::connect() ;

		// トムさんに聞く
		$sql = "SELECT DISTINCT receive_id FROM messages WHERE user_id = ?" ;
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute(array($this->id));
		$messages = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

		for($i = 0 ; $i < count($messages); $i++){
			if($messages[$i]["receive_id"] == $this->id){
				unset($messages[$i]);
			}
		}

		$users = [] ;
		foreach ($messages as $m) {
			$stmt = $this->dbh->prepare("SELECT user_name,id,user_id FROM users WHERE id = ?");
			$stmt->execute(array($m["receive_id"])) ;
			$user = $stmt->fetch(PDO::FETCH_ASSOC) ;

			array_push($users,$user) ;
		}

		parent::disconnect() ;

		return $users ;
	}

	function get(){
		$sql = "
		SELECT users.user_name,messages.content,messages.user_id,messages.receive_id,messages.created	
		FROM users 
		JOIN messages ON users.id = messages.user_id OR users.id = messages.user_id
		ORDER BY created DESC" ;
		return parent::select($sql,array($this->id,2)) ;
	}

	function to_user(){
		// トムさんに聞く

		$sql = "
		SELECT users.user_name,messages.content,messages.user_id,messages.receive_id,messages.created	
		FROM users 
		JOIN messages ON users.id = messages.user_id OR users.id = messages.receive_id" ;
		return parent::select($sql,array($this->id,$this->id)) ;
		
	}

	function send($receive_id,$content){
		$sql = "INSERT INTO messages (user_id, receive_id, content) VALUES (?, ?, ?)" ;
		parent::insert($sql,array($this->id, $receive_id, $content)) ;
	}
}

?>