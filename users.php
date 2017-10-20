<?php

require_once("class/user.php") ;
require_once("class/follow.php") ;

session_start();

$follow = "" ;

// ログイン状態チェック
if (!isset($_SESSION["user_id"])) {
	// login.phpへ移動する
	header("Location: login.php");
	exit();
}else{
	$user = new User($_GET["user_id"]) ;
	$follow = new Follow($_SESSION["user_id"]) ;

}

if(isset($_POST["follow_id"])){
	$follow = $follow->follow($_POST["follow_id"]) ;
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
		<h1>ユーザープロフィール</h1>
		<p>ようこそ<?php echo $user->name ; ?>さん</p>

		<?php foreach (get_object_vars($user) as $key => $value): ?>
			<?php if(isset($user->keys[$key])): ?>
				<p><?php echo $user->keys[$key] ; ?>：<?php echo $value ; ?></p>
			<?php endif; ?>
		<?php endforeach ; ?>
		<form method="post" action="">
			<input type="hidden" name="follow_id" value="<?php echo $user->id ; ?>">
			<?php if($follow->states_check($user->id)): ?>
				<input type="hidden" name="follow_states" value="true">
				<input type="submit" class="btn btn-primary" value="フォロー中">
			<?php else: ?>
				<input type="hidden" name="follow_states" value="false">
				<input type="submit" class="btn btn-primary" value="フォロー">

			<?php endif ; ?>
			</form>
		</div>

		<script src="assets/jquery/jquery.js" type="text/javascript"></script>
		<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

	</body>
	</html>