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

		$sql = "SELECT DISTINCT receive_id 
		FROM messages 
		WHERE user_id = ? OR receive_id = ?" ;
		$stmt = $this->dbh->prepare($sql);

		$stmt->execute([$this->id,$this->id]);
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

	function get($opponent_user_id){
		$sql = "
		SELECT users.user_name,users.img_path,messages.content,messages.user_id,messages.receive_id,messages.created 
		FROM users  
		JOIN messages ON users.id = messages.user_id 
		WHERE (messages.user_id = ? AND messages.receive_id = ?) 
		OR (messages.user_id = ? AND messages.receive_id = ?)
		ORDER BY created DESC" ;
		return parent::select($sql,[$this->id,$opponent_user_id,$opponent_user_id,$this->id]) ;
	}

	function to_user(){
		// トムさんに聞く

		$sql = "
		SELECT users.user_name,messages.content,messages.user_id,messages.receive_id,messages.created,users.img_path
		FROM users 
		JOIN messages ON users.id = messages.user_id OR users.id = messages.receive_id" ;
		return parent::select($sql,[$this->id,$this->id]) ;
		
	}

	function send($receive_id,$content){
		$sql = "INSERT INTO messages (user_id, receive_id, content) VALUES (?, ?, ?)" ;
		parent::insert($sql,[$this->id, $receive_id, $content]) ;
	}
}

?>