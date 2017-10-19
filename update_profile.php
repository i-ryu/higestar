<?php
require_once "./class/user.php" ;

session_start();

// ログイン状態チェック
if (!isset($_SESSION["user_id"])) {
	header("Location: logout.php");
	exit;
}else{
	$user = new user($_SESSION["user_id"]) ;
}


if(isset($_POST["update"])){
	$user->update_profile(
		h($_POST["user_id"])
		,h($_POST["user_name"])
		,h($_POST["email"])
		,h($_POST["room_number"])
		,h($_POST["team_id"])
		,h($_POST["start_date"])
		,h($_POST["end_date"])
	) ;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>メイン</title>
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">

</head>
<body>
	<?php include("./partial/navbar.php"); ?>

	<div class="container">
		<h1>プロフィール編集</h1>
		<form method="POST" action="">
			<input type="hidden" name="update" value="update">
			<div class="form-group">
				<label>ユーザーID</label>
				<input type="text" name="user_id" class="form-control" value="<?php echo $user->id ?>">
			</div>
			<div class="form-group">
				<label>ユーザー名</label>
				<input type="text" name="user_name" class="form-control" value="<?php echo $user->name ; ?>">			
			</div>

			<div class="form-group">
				<label>メールアドレス</label>
				<input type="text" name="email" class="form-control" value="<?php echo $user->email ; ?>">
			</div>

			<input type="submit" name="" class="btn btn-primary">
		</form>
	</div>

	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>