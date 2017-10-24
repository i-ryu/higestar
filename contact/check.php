<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>確認画面</title>
</head>
<body>
	<h1>入力内容確認</h1>
	<?php 

	if(empty($_GET)){
		echo "データを入力してください。";
		echo "<br>";
		echo '<a href="index.php">前の画面へ戻る</a>';
		exit();
	}

	$nickname = htmlspecialchars($_GET["nickname"]);
	$email = htmlspecialchars($_GET["email"]);
	$content = htmlspecialchars($_GET["content"]);


	if ($email == "") {
		echo "メールアドレスを入力してください。";
		echo "<br>";
	}else{
		echo "メールアドレス:" . $email;
		echo "<br>";
	}


	if ($content == "") {
		$content2 = "お問い合わせ内容を入力してください。";
	}else{
		$content2 = "お問い合わせ内容:" . $content;
	}

	?>
	<div style="font-size: 10px">
		<?php  echo $content2; ?>
	</div>
	<form method="POST" action="thanks.php">
		
		<input type="button" value="戻る" onclick="history.back()">


		<?php 
		if($nickname != '' && $email != '' && $content != ''){
			?>

			<input type="hidden" name="nickname" value="<?php echo $nickname;?>">
			<input type="hidden" name="email" value="<?php echo $email;?>">
			<input type="hidden" name="content" value="<?php echo $content;?>">
			<input type="submit" value="送信するぜ">
			<br>
			<br>
			<span style="color: red; font-size: 8px">
				上記の内容で送信しても本当によろしいですか
				問題ない場合は、送信ボタンをクリックしてください
			</span>
			<?php } ?>

		</form>

	</body>
	</html>