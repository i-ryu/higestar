<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

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
    Home &middot; 
  </title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="assets/css/toolkit.css" rel="stylesheet">
  <link href="assets/css/application.css" rel="stylesheet">
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

<body class="with-top-navbar">

  <div class="growl" id="app-growl"></div>
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/navbar.php") ; ?>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/dm_modal.php") ; ?>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/follow_modal.php") ; ?>

  <div class="container p-t-md">
    <div class="row">
      <div class="col-md-3">
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/simple_profile.php") ; ?>
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/other_profile.php") ; ?>
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/simple_photo.php") ; ?>

      </div>

      <div class="col-md-6">
        <ul class="list-group media-list media-list-stream">
          <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/post_form.php") ; ?>
          <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/time_line.php") ; ?>
        </ul>
      </div>

      <!-- 右側 -->
      <div class="col-md-3">
        <div class="alert alert-warning alert-dismissible hidden-xs" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <a class="alert-link" href="profile/">髭の手入れはお済みですか？今日の髭占いはボーボーです。
        </div>

        <!-- 広告 -->
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/advertisement.php") ; ?>
        
        <!-- おすすめユーザーみたいなやつ -->
        <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/recomment_user.php") ; ?>
      </div>


      <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>

</body>
</html>

