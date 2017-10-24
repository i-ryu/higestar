
<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/db_connect.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/function.php") ;

class Auth{
	var $id ;
	var $email ;
	var $db ;
	var $domain ;

	function __construct($email){
		$this->email = $email ;
		$this->db = new Database() ;
		$this->domain = "http://higesta.com/" ;
	}

	function login_auth($post){
		
		// メッセージを返すために$msgを定義する。
		$msg = "" ;

		if(empty($this->email) || empty($this->password)){
			$msg = "IDまたは、パスワードが入力されていません。" ;
		}

		// データベースからデータを取ってくる。
		$this->db->connect() ;
		$sql = "SELECT * FROM users WHERE email = ?" ;
		$stmt = $this->db->dbh->prepare($sql);
		$stmt->execute(array($this->email));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		// もしデータがあれば、
		if ($result) {
			// もしパスワードがあっていれば、
			if (password_verify($this->password, $result['password'])) {
				session_regenerate_id(true);

                // user_idをセッションへ保存		
				$_SESSION["user_id"] = $result["user_id"] ;
				$_SESSION["id"] = $result["id"] ;

				header("Location: ../index.php");

				// exit();
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
	function sign_up($password,$password2){
		
		if (empty($this->email)) 
			return false ;
		else if (empty($password) || empty($password2))
			return false ;


		if (
			!empty($this->email) 
			&& !empty($password) 
			&& !empty($password2) 
			&& $password === $password2) 
		{
			// データベースへ保存
			$this->db->connect() ;
			$stmt = $this->db->dbh->prepare("INSERT INTO users (email,password) VALUES (?, ?)");
			$stmt->execute(array($this->email, password_hash($password, PASSWORD_DEFAULT)));
			
			$stmt = $this->db->dbh->prepare("SELECT * FROM users WHERE email = ?") ;
			$stmt->execute(array($this->email));
			$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

			$dir = $_SERVER["DOCUMENT_ROOT"]."user_images/".$result["id"] ;

			/* ディレクトリの生成 */
			if (!is_dir($dir)) {
      			// ディレクトリが存在していなければ生成を試みる
				if (!mkdir($dir)) {
			        // ディレクトリ生成に失敗
					throw new RuntimeException("ディレクトリ生成に失敗:".$dir);
				}
				// パーミッションを0777に設定
				chmod($dir, 0777);
				$msgs[] = array('blue', 'Created directory "' . $dir . '"');
			}			

			$this->db->disconnect() ;


			return true ;

		} else if($password != $password2) {
			return false ;
		}
		return false ;
	}

	function setting_profile($user_id,$user_name,$profile_content,$file){
		$this->db->connect() ;

		$stmt = $this->db->dbh->prepare("SELECT id,user_id FROM users WHERE email = ?") ;
		$stmt->execute(array($this->email));
		$result = $stmt->fetch(PDO::FETCH_ASSOC) ;

		$_SESSION["id"] = $result["id"] ;
		$_SESSION["user_id"] = $result["user_id"] ;

		$stmt = $this->db->dbh->prepare("
			UPDATE users SET 
			user_id = ?
			, user_name = ?
			, content = ?
			, img_path = ?
			WHERE email = ?");

		$params = array(
			$user_id
			, $user_name
			, $profile_content
			, "assets/user_images/".$result["id"]."/".$file["name"]
			, $this->email
		);

		$stmt->execute($params);

		$dir = $_SERVER["DOCUMENT_ROOT"]."user_images/".$result["id"]."/".$file["name"] ;
		if (!move_uploaded_file($file['tmp_name'], $dir)) {
            // ファイル移動に失敗
			throw new RuntimeException('Failed to save uploaded file');
		}
        // ファイルのパーミッションを確実に0644に設定する
		chmod($dir, 0644);

		$this->db->disconnect() ;
		//header("Location: ".$this->domain) ;
	}

}


?>