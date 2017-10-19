
<?php 
require_once("./class/db_connect.php") ;

class Auth{
	var $id ;
	var $password ;
	var $db ;

	function __construct($id,$password){
		$this->id = $id ;
		$this->password = $password ;
		$this->db = new Database() ;
	}

	function login_auth($post){
		
		// メッセージを返すために$msgを定義する。
		$msg = "" ;

		if(empty($this->id) || empty($this->password)){
			$msg = "IDまたは、パスワードが入力されていません。" ;
		}

		// データベースからデータを取ってくる。
		$this->db->connect() ;
		$sql = "SELECT * FROM users WHERE user_id = ?" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->id));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		// もしデータがあれば、
		if ($result) {
			// もしパスワードがあっていれば、
			if (password_verify($this->password, $result['password'])) {
				session_regenerate_id(true);

                // user_idをセッションへ保存		
				$_SESSION["user_id"] = $this->id ;

				header("Location: /higesta/index.php");

				exit();
			} else {
				$msg = "パスワードに誤りがあります。";
			}
		}else{
			$msg = "ユーザーIDあるいはパスワードに誤りがあります。";
		}

		$this->db->disconnect() ;
		return $msg ;
	}
	
	// 登録
	function sign_up($name,$password2){
		
		if (empty($name)) 
			return "ユーザー名が未入力です。";
		else if (empty($this->password) || empty($password2))
			return "パスワードが未入力です。";


		if (
			!empty($name) 
			&& !empty($this->password) 
			&& !empty($password2) 
			&& $this->password === $password2) 
		{
			// データベースへ保存
			$this->db->connect() ;
			$stmt = $this->db->dbh->prepare("INSERT INTO users(user_name,user_id,password) VALUES (?, ?, ?)");
			$stmt->execute(array($name, $this->id, password_hash($this->password, PASSWORD_DEFAULT)));
			$this->db->disconnect() ;

			return  "登録が完了しました。あなたの登録IDは".$this->id."です。";  

		} else if($this->password != $password2) {
			return "パスワードが一致しません。" ;
		}
		return "エラー" ;


	}

}


?>