<?php

require_once("class/user.php") ;
require_once("class/follow.php") ;

session_start();

// ログイン状態チェック
if (!isset($_SESSION["user_id"])) {
	// login.phpへ移動する
	header("Location: login.php");
	exit();
}else{
	$user = new User($_SESSION["user_id"]) ;
	$follow = new Follow($_SESSION["user_id"]) ;

	$userSet = new UserSet() ;
	$users = $userSet->all_find_users() ;
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

		<h1>フォロー一覧</h1>
		<?php foreach ($follow->get_follow() as $f): ?>
			<p>
				<a href=""><?php echo $f["user_name"] ; ?></a>
			</p>
		<?php endforeach ; ?>


		<h1>ユーザー一覧</h1>
		<?php foreach($users as $u): ?>
			<?php if($u["user_id"] != $_SESSION["user_id"]): ?>
				<p>
					<a href="users.php?user_id=<?php echo $u['user_id'] ; ?>">
						<?php echo $u["user_name"] ; ?>
					</a>
				</p>
			<?php endif ; ?>
		<?php endforeach ; ?>

	</div>

	<script src="assets/jquery/jquery.js" type="text/javascript"></script>
	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

</body>
</html>