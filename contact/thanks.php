<!-- <?php 
if (empty($_POST)) {
	echo "データを入力してください";
	header("Location: index.html");
	exit();
}
	$dsn = 'mysql:dbname=php_form;host=localhost';
	$user = 'root';
	$password ='';
	$dbh = new PDO($dsn, $user, $password);
	$dbh->query('SET NAMES utf8');
	$sql = 'INSERT INTO `survey` SET
	                    `email`=?,
	                    `content`=?;';
	$nickname =htmlspecialchars($_POST['nickname']);
	$email = htmlspecialchars($_POST['email']);
	$content = htmlspecialchars($_POST['content']);
	$data = array($nickname,$email,$content);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
	$dbh = null;


?> -->


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>お問い合わせ完了</title>
</head>
<body>
	<h1>お問い合わせ完了</h1>

	お問い合わせいただきまして、誠にありがとうございます。<br>
	お問い合わせいただきました内容につきましては<br>
	追ってご連絡いたしますので、暫くお待ちください。<br>
	<h2>お問い合わせ内容</h2>
	<div style="font-size: 14px">
		メール:<?php echo $email; ?>
	</div>
	<div style="font-size: 14px">
		お問い合わせ内容:<?php echo $content; ?>
	</div>
	<a href="index.php">トップに戻る</a>

</body>
</html>