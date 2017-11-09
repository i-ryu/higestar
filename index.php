<?php
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>
    Home &middot; 
  </title>
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/head.php") ; ?>

</head>

<body class="with-top-navbar">
  <div class="growl" id="app-growl"></div>

  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/navbar.php") ; ?>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/dm_modal.php") ; ?>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/follow_modal.php") ; ?>

  <div class="modal fade" id="best_like_alert" tabindex="-1" role="dialog" aria-labelledby="best_like_alert" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="top_alert"><strong style="color:red;">警告</strong></h4>
        </div>
        <div class="modal-body" id="top_content">
          <p>1日1回までしか押せませんが、<br><strong>本当によろしいですか？</strong></p>
        </div>
        <div class="modal-actions" id="best_like_confirm_btn">
          <button type="button" class="btn-link modal-action" data-dismiss="modal">NO</button>
          <button type="button" class="btn-link modal-action best_like_btn_decide" data-dismiss="modal">
            <strong>YES</strong>
          </button>
        </div>
      </div>
    </div>
  </div>


  <div class="container p-t-md">
    <div class="row">
      <div class="col-md-3">
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/simple_profile.php") ; ?>
        <?php // include($_SERVER["DOCUMENT_ROOT"]."assets/partial/other_profile.php") ; ?>
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/simple_photo.php") ; ?>
      </div>

      <div class="col-md-6">
        <ul class="list-group media-list media-list-stream">
          <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/post_form.php") ; ?>

          <?php $timeline_posts = $user->post->post_get() ; ?>
          <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/time_line.php") ; ?>
        </ul>
      </div>

      <!-- 右側 -->
      <div class="col-md-3">
        <div class="alert alert-warning alert-dismissible hidden-xs" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <a class="alert-link" href="profile/">髭の手入れはお済みですか？今日の髭占いはボーボーです。</a>
        </div>

        <!-- 広告 -->
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/advertisement.php") ; ?>

        <!-- おすすめユーザーみたいなやつ -->
        <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/recomment_user.php") ; ?>
      </div>

      <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>



    </body>
    </html>

