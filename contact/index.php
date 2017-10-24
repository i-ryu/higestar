<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>苦情ページ</title>
</head>
<body>
	<h1>苦情情報入力</h1>
	<form method="GET" action="check.php">

		<div>
			メールアドレス<br>
			<input type="text" name="email" style="width: 150px">
		</div>		

		<div>
			お問い合わせ内容<br>
			<textarea name="content" cols="40" rows="5"></textarea>
		</div>



		<div>
			<input type="submit" value="送信">
		</div>
	</form>


</body>
</html>