<?php 

require "./assets/password.php" ;
require './class/auth.php';
session_start();

$msg = "" ;

// // ログインボタンが押された場合
if (isset($_POST["login"])) {
	$auth = new Auth($_POST["user_id"],$_POST["user_password"]) ;
	$msg = $auth->login_auth($_POST["user_id"]) ;
}

if(isset($_SESSION["user_id"])){
	header("Location: http://localhost/higesta/index.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ログイン</title>
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" href="image/favicon.png">
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT']."/higesta/partial/navbar.php"); ?>

	<div class="container">
		<h1>ログイン画面</h1>
		<form id="loginForm" name="loginForm" action="" method="POST">

			<div>
				<font color="red">
					<?php echo htmlspecialchars($msg); ?>
				</font>
			</div>
			<?php include($_SERVER['DOCUMENT_ROOT']."/higesta/partial/login_form.php"); ?>
			<input type="submit" name="login" class="btn btn-primary" value="ログイン">

		</form>
		<br>

		<a href="sign_up.php" class="btn btn-primary">新規登録</a>
	</div>
	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>