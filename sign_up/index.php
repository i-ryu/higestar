<?php 

session_start();
$domain = "http://higesta.com/" ;

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
    新規無料会員登録 &middot; 
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
      <form role="form" class="m-x-auto text-center app-login-form" method="POST" action="<?php echo $domain ;?>/sign_up/register_profile.php">

        <a href="../index.php" class="app-brand m-b-lg">
          <img src="../assets/img/brand.png" alt="brand">
        </a>

        <div class="form-group">
          <label for="user_mail">メールアドレス</label>
          <input class="form-control" placeholder="example@higesta.com" name="email">
        </div>

        <div class="form-group m-b-md">
          <label for="user_password">パスワード</label>
          <input type="password" class="form-control" placeholder="パスワード" name="user_password">
        </div>

        <div class="form-group m-b-md">
          <label for="user_password">パスワード</label>          
          <input type="password" class="form-control" placeholder="確認用パスワード" name="user_password2">
        </div>

        <input type="hidden" name="sign_up" value="true">
        <div class="m-b-lg">
            <input type="submit" class="btn btn-primary" value="無料会員登録">
        </div>

        <footer class="screen-login">
          <a href="<?php echo $domain ; ?>login" class="text-muted">←ログイン画面へ戻る</a>
        </footer>
      </form>
    </div>
  </div>

  <?php if (isset($msgs)): ?>
    <fieldset>
      <legend>Result</legend>
      <ul>
        <?php foreach ($msgs as $msg): ?> 
          <li style="color:<?=h($msg[0])?>;"><?=h($msg[1])?></li>
        <?php endforeach; ?>
      </ul>
    </fieldset>
  <?php endif; ?>

  <form enctype="multipart/form-data" method="post" action="">
    <fieldset>
      Directory path: <input type="text" name="path" value="" /><br />
      Filename(GIF, JPEG, PNG): <br />
      <input type="submit" value="Upload" />
    </fieldset>
  </form>



  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>

</body>
</html>

