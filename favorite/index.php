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

  <div class="container p-t-md">
    <div class="row">
      <div class="col-md-3">
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/simple_profile.php") ; ?>
        <?php //include($_SERVER["DOCUMENT_ROOT"]."assets/partial/other_profile.php") ; ?>
        <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/simple_photo.php") ; ?>
      </div>

      <!-- 真ん中 -->
      <div class="col-md-6">
        <ul class="list-group media-list media-list-stream">

          <ul class="list-group media-list media-list-stream">
            <li class="list-group-item p-a">
              <h3 class="m-a-0">お気に入り</h3>
            </li>
            <?php $timeline_posts = $user->like->user_likes(); ?>
            <?php foreach($timeline_posts as $post): ?>
              <li class="media list-group-item p-a">

                <a class="media-left" href="<?php echo $user->domain.'profile/?id='.$post["id"] ; ?>">
                  <img
                  class="media-object img-circle"
                  src="../assets/img/avatar-dhg.png">
                </a>

                <div class="media-body">
                  <div class="media-heading">
                    <small class="pull-right text-muted"><?php echo diff($post["created"]); ?></small>
                    <h5><?php echo $post["user_name"]; ?></h5>
                  </div>

                  <div class="media-body-inline-grid" data-grid="images">
                    <div style="display: none">
                      <img data-action="zoom" data-width="1048" data-height="700" src="http://higesta.com/<?php echo $post['img_path'] ; ?>">
                    </div><br>

                    <span class="fa fa-heart fa-2x fa-pink pull-right" aria-hidden="true"></span><br>
                    <p><?php echo $post["content"]; ?></p>
                  </div>
                </div>
              </li>
            <?php endforeach ; ?>
          </ul>
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

