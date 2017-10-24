<?php 

require($_SERVER["DOCUMENT_ROOT"]."assets/common/password.php") ;
require($_SERVER["DOCUMENT_ROOT"]."assets/common/auth.php");
session_start();
$domain = "http://higesta.com/" ;


// // ログインボタンが押された場合
if (!empty($_POST["login"])) {
  // authクラスのインスタンスを生成
  $auth = new Auth($_POST["email"]) ;
  // authクラスのlogin_auth関数を実行
  $msg = $auth->login_auth($_POST["user_password"]) ; 
}

// ログインページに移動したとしてももうすでにログインしていれば、index.phpへ飛ばす
if(!empty($_SESSION["user_id"])){
  //header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <title>
    Login &middot; 
  </title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="../assets/css/toolkit.css" rel="stylesheet">
  <link href="../assets/css/application.css" rel="stylesheet">
  <style>
  /* note: this is a hack for ios iframe for bootstrap themes shopify page */
  /* this chunk of css is not part of the toolkit :) */
  body {
    width: 1px;
    min-width: 100%;
    *width: 100%;
  }
</style>
</head>

<body>
  <div class="container-fluid container-fill-height">
    <div class="container-content-middle">
      <form role="form" class="m-x-auto text-center app-login-form" method="POST" action="">

        <a href="../index.html" class="app-brand m-b-lg">
          <img src="../assets/img/brand.png" alt="brand">
        </a>

        <div class="form-group">
          <input class="form-control" placeholder="メールアドレス" name="email">
        </div>

        <div class="form-group m-b-md">
          <input type="password" class="form-control" placeholder="パスワード" name="user_password">
        </div>
        <input type="hidden" name="login" value="true">

        <div class="m-b-lg">
          <button class="btn btn-primary">ログイン</button>
          <button class="btn btn-default" >
            <a href="<?php echo $domain ;?>sign_up">新規登録</a>
          </button>
        </div>

        <footer class="screen-login">
          <a href="#" class="text-muted">パスワードを忘れた方へ</a>
        </footer>
      </form>
    </div>
  </div>


  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>

</body>
</html>

