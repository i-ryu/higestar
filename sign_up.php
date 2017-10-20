<?php
require "./assets/password.php" ;
require "./class/auth.php" ;

session_start();

$msg = "" ;

// ログインボタンが押された場合
if (isset($_POST["sign_up"])) {
	$auth = new Auth($_POST["user_id"],$_POST["password"]) ;
	$msg = $auth->sign_up($_POST["user_name"], $_POST["password2"]) ;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>新規登録</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" href="image/favicon.png">
</head>

<body>
	<?php include("partial/navbar.php"); ?>

	<div class="container">
		<h1>新規登録画面</h1>
		<form id="loginForm" name="loginForm" action="" method="POST">
			<div>
				<div>新規登録フォーム</div>
				<div>
					<?php echo $msg ; ?>		
				</div>
				<div class="form-group">
					<label for="user_name">ユーザー名</label>
					<input type="text" name="user_name" class="form-control" placeholder="ユーザー名を入力">
					<br>					
				</div>

				<div class="form-group">
					<label for="user_id">ユーザーID</label>
					<input type="text" name="user_id" class="form-control" placeholder="ユーザーIDを入力">
					<br>
				</div>

				<div class="form-group">
					<label for="password">パスワード</label>
					<input type="password" name="password"  class="form-control" placeholder="パスワードを入力">
					<br>
				</div>

				<div class="form-group">
				<label for="password2">パスワード(確認用)</label>
				<input type="password" name="password2"  class="form-control" placeholder="再度パスワードを入力">
				<br>
				</div>

				<div class="form-group">
				<input type="submit" name="sign_up" class="btn btn-primary" value="新規登録">
				</div>
			</div>
		</form>
		<br>
		<form action="">
			<input type="submit" value="戻る">
		</form>
	</div>

	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>	
</body>
</html>