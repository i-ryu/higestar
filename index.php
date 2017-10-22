<?php

require_once("class/user.php") ;
require_once("class/follow.php") ;
require_once("class/post.php") ;
require_once("class/db_connect.php") ;

session_start();

// ログイン状態チェック
if (!isset($_SESSION["id"])) {
	// login.phpへ移動する
	header("Location: login.php");
	exit();
}elseif(isset($_SESSION["user_id"])){
	$user = new User($_SESSION["id"]) ;
	$follow = new Follow($_SESSION["id"]) ;
	$post = new Post($_SESSION["id"]) ;
	$userSet = new UserSet() ;
	$users = $userSet->all_find_users() ;
}

if(isset($_FILES["upfile"])){
	$post->upload($_FILES['upfile']) ;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>メイン</title>
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" href="images/favicon.png">

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

		<h1>投稿</h1>
		<div id="wrap">
			<?php if (isset($error)) : ?>
				<p class="error"><?= htmlspecialchars($error); ?></p>
			<?php endif; ?>
			<form action="" method="POST" enctype="multipart/form-data">
				<p>
					<label for="content">テキスト</label>
					<input type="text" name="content" id="content" />
				</p>
				<p>
					<label for="upfile">画像ファイル</label>
					<input type="file" name="upfile" id="upfile" />
				</p>
				<p>
					<button type="submit">送信</button>
				</p>
			</form>
		</div>

		<h1>投稿画像一覧</h1>

		<?php foreach ($post->display() as $image): ?>

			<p>
				<img src="<?php echo $image["img_path"] ; ?>" width="300px">
			</p>
		<?php endforeach ; ?>
		<h1>フォロー一覧</h1>
		<?php foreach ($follow->get_follow() as $f): ?>
			<p>
				<a href="./users.php?id=<?php echo $f['id'] ; ?>"><?php echo $f["user_name"] ; ?></a>
			</p>
		<?php endforeach ; ?>


		<h1>ユーザー一覧</h1>
		<?php foreach($users as $u): ?>
			<?php if($u["user_id"] != $_SESSION["user_id"]): ?>
				<p>
					<a href="users.php?id=<?php echo $u['id'] ; ?>"><?php echo $u["user_name"] ; ?></a>
				</p>
			<?php endif ; ?>
		<?php endforeach ; ?>

	</div>

	<script src="assets/jquery/jquery.js" type="text/javascript"></script>
	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

</body>
</html>