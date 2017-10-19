<?php

require_once("class/user.php") ;

session_start();

// ログイン状態チェック
if (!isset($_SESSION["user_id"])) {
	// login.phpへ移動する
	header("Location: login.php");
	exit();
}else{
	$user = new User($_SESSION["user_id"]) ;
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
		<h1>メイン画面</h1>
		<p>ようこそ<u><?php echo $user->name ; ?></u>さん</p>

		<?php foreach (get_object_vars($user) as $key => $value): ?>
			<?php if(isset($user->keys[$key])): ?>
				<p><?php echo $user->keys[$key] ; ?>：<?php echo $value ; ?></p>
			<?php endif; ?>
		<?php endforeach ; ?>

		<ul>
			<li><a href="logout.php">ログアウト</a></li>
		</ul>
		<a href="update_profile.php">プロフィールを更新する。</a>

	</div>

	<script src="assets/jquery/jquery.js" type="text/javascript"></script>
	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

</body>
</html>