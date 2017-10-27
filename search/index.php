<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/head.php") ; ?>

	<title>
		Home &middot; 
	</title>

</head>

<body class="with-top-navbar">

	<div class="growl" id="app-growl"></div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/navbar.php") ; ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/dm_modal.php") ; ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/follow_modal.php") ; ?>

	<div class="container p-t-md">


		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="seach_bar active"><a href="#">髭投稿</a></li>
			<li role="presentation" class="search_bar"><a href="#">髭画像</a></li>
			<li role="presentation" class="search_bar"><a href="#">ユーザー</a></li>
		</ul>

		<div class="row">

			<!-- 左側 -->
			<div class="col-md-6">
				<ul class="list-group media-list media-list-stream">
					<!-- タイムライン -->
					<?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/time_line.php") ; ?>
				</ul>
			</div>

			<!-- 右側 -->
			<div class="col-md-3">
				<div class="alert alert-warning alert-dismissible hidden-xs" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<a class="alert-link" href="profile/">Visit your profile!</a> Check your self, you aren't looking too good.
				</div>

				<!-- 広告 -->
				<?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/advertisement.php") ; ?>

				<!-- おすすめユーザー -->
				<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/recomment_user.php") ; ?>
			</div>
		</div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>

</body>
</html>
