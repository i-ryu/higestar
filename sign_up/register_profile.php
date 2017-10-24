<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/auth.php");
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/function.php");

session_start();

if(!empty($_POST["sign_up"])){
  $auth = new Auth(h($_POST["email"])) ;
  $auth->sign_up($_POST["user_password"],$_POST["user_password2"]) ;
}

if(!empty($_POST["profile_setting"])){
  $auth = new Auth(h($_POST["email"]));
  $auth->setting_profile(
    h($_POST["user_id"]),
    h($_POST["user_name"]),
    h($_POST["profile_content"]),
    $_FILES["upfile"]
  );
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

      <form enctype="multipart/form-data" role="form" class="m-x-auto text-center app-login-form" method="POST" action="" >

        <a href="../index.php" class="app-brand m-b-lg">
          <img src="../assets/img/brand.png" alt="brand">
        </a>

        <div class="form-group">
          <label for="user_id">ユーザーID</label>
          <input class="form-control" placeholder="higehige" name="user_id">
        </div>

        <div class="form-group">
          <label for="user_name">ユーザー名</label>
          <input class="form-control" placeholder="髭顔" name="user_name">
        </div>
        
        <div class="form-group m-b-md">
          <label for="user_password">プロフィール画像</label>
          <input type="file" class="form-control" name="upfile">
        </div>
        <div class="form-group m-b-md">
          <label for="profile_content">紹介文</label>
          <textarea name="profile_content" class="form-control"></textarea>
        </div>

        <input type="hidden" name="profile_setting" value="true">
        <input type="hidden" name="email" value="<?php echo $_POST['email'] ; ?>">
        <div class="m-b-lg">
          <input type="submit" class="btn btn-primary" value="登録">
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

