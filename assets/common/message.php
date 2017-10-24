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

		$stmt = $this->db->dbh->prepare("SELECT * FROM messages WHERE user_id = ?");
		$stmt->execute(array($this->id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		$this->db->disconnect() ;

		return array(
			["user_name"=>"太郎","content"=>"ンゴアンリのい"],
			["user_name"=>"太郎","content"=>"ンゴアンリのい"]
		);
	}

	function get(){
		return array(
			['user_name' => "太郎","content" => "gに顎あののr"],
			['user_name' => "太郎","content" => "んゔぁおん"],
			['user_name' => "太郎","content" => "gに顎あのあvんpんヴィアのr"],
			['user_name' => "太郎","content" => "gにvまp真央顎あののr"],

		);
	}

	function send($receice_id,$content){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("INSERT INTO messages (user_id, receice_id, content) VALUES (?, ?, ?)");

		$stmt->execute(array($this->id, $receice_id, $content));
		$this->db->disconnect() ;

	}
}

?>