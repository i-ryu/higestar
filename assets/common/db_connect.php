<?php 

class Database{
	var $db_name ;
	var $host ;
	var $user_name ;
	var $password ;
	var $dbh ;

	function __construct(){
		$this->db_name = "higesta" ;
		$this->host = "localhost" ;
		$this->user = "root" ;
		$this->password = "" ;
	}

	function connect(){
		try{
			$dsn = 'mysql:dbname='.$this->db_name.';host='.$this->host;
			$this->dbh = new PDO($dsn, $this->user, $this->password);
			$this->dbh->query('SET NAMES utf8');

		}catch (PDOException $e){
			echo "接続に失敗しました";
			var_dump($e ->getMessage());
			exit;
		}
	}

	function disconnect(){
		$this->dbh = null ; 
	}
	
}


?>

