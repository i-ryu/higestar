<?php 

class Setting {
	var $db_name ;
	var $host ;
	var $db_password ;
	var $db_user ;
	var $dbh ;
	var $domain ;

	function __construct(){
		$this->db_name = "higesta" ;
		$this->host = "localhost" ;
		$this->db_user = "root" ;
		$this->db_password = "" ;
		$this->domain = "http://higesta.com/" ;
	}

	function connect(){
		try{
			$dsn = 'mysql:dbname='.$this->db_name.';host='.$this->host;
			$this->dbh = new PDO($dsn, $this->db_user, $this->db_password);
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

	function insert($sql,$array){
		$this->connect() ;

		$stmt = $this->dbh->prepare($sql);

		$stmt->execute($array);
		$this->disconnect() ;
	}
	
	function select($sql,$array){
		$this->connect() ;
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute($array);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
		$this->disconnect() ;
		return $result ;
	}

	function delete(){
		
	}

}


?>