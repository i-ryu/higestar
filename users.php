<?php

require_once("class/user.php") ;
require_once("class/follow.php") ;

session_start();

// ログイン状態チェック
if (!isset($_SESSION["id"])) {
	// login.phpへ移動する
	header("Location: login.php");
	exit();
}else{
	$user = new User($_GET["id"]) ;
	$follow = new Follow($_SESSION["id"]) ;
}

// フォローしていないとき
if(isset($_POST["follow_id"]) && $_POST["follow_states"] == "false"){
	$follow->follow($_POST["follow_id"]) ;
}

// フォローしてるとき
if(isset($_POST["follow_id"]) && $_POST["follow_states"] == "true"){
	$follow->unfollow($_POST["follow_id"]) ;
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

		<?php foreach (get_object_vars($user) as $key => $value): ?>
			<?php if(isset($user->keys[$key])): ?>
				<p><?php echo $user->keys[$key] ; ?>：<?php echo $value ; ?></p>
			<?php endif; ?>
		<?php endforeach ; ?>

		<form method="post" action="">
			<input type="hidden" name="follow_id" value="<?php echo $user->id ; ?>">
			<?php if($follow->is_follow($user->id) == true): ?>
				<input type="hidden" name="follow_states" value="true">
				<input type="submit" class="btn btn-primary" value="フォロー中" id="unfollow_btn">
			<?php else: ?>
				<input type="hidden" name="follow_states" value="false">
				<input type="submit" class="btn btn-primary" value="フォロー" id="follow_btn">
			<?php endif ; ?>
		</form>
	</div>

	<script src="assets/jquery/jquery.js" type="text/javascript"></script>
	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>


	<script>
		$(function() {
			$("#unfollow_btn")
			.mouseover(function() {
				$("#unfollow_btn").removeClass("btn-primary");
				$("#unfollow_btn").addClass("btn-danger");
				$("#unfollow_btn").val("フォロー解除") ;
			}) 

			$("#unfollow_btn")
			.mouseout(function() {
				$("#unfollow_btn").addClass("btn-primary");
				$("#unfollow_btn").removeClass("btn-danger");
				$("#unfollow_btn").val("フォロー中") ;
			})
		}) ;



	</script>

</body>
</html>