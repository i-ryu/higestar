<?php

require_once "class/db_connect.php" ;

session_start();

if (isset($_SESSION["LOGIN"])) {
    $errorMessage = "ログアウトしました。";
} else {
    $errorMessage = "セッションがタイムアウトしました。";
}

// セッションの変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="image/favicon.png">

</head>
<body>
    <?php include("partial/navbar.php"); ?>

    <div class="container">

        <h1>ログアウト画面</h1>
        <div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
        <ul>
            <li><a href="/higesta/login.php">ログイン画面に戻る</a></li>
        </ul>
        
    </div>
    <?php  include("partial/footer.php") ; ?>
</body>
</html>