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

        <script type="text/javascript">

          function like_save(id){
            console.log(id) ;
            $(document).on("click", "#like_btn"+id, function () {
              console.log(this.id);
              console.log($("#like_btn"+id)) ;
              // クラスが存在するか判定するところをかく
              $("#like_btn"+id).removeClass("fa-heart-o") ;
              $("#like_btn"+id).addClass("fa-heart") ;
              $("#like_btn"+id).addClass("fa-pink") ;
            });
            <?php 
            $user->like->save($user->id,"1") ;
            ?>
          }

        </script>

      </body>
      </html>

