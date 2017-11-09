<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

if(!empty($_GET["id"]) && $_GET["id"] != $user->id){
  $show_user = new User($_GET["id"]) ;
}else{
  $show_user = $user ;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/head.php") ; ?>
  <title>
    <?php echo $show_user->name; ?> | 髭スタ 
  </title>
</head>


<body class="with-top-navbar">
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/dm_modal.php") ; ?>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/partial/follow_modal.php") ; ?>

  <div class="growl" id="app-growl"></div>
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/navbar.php") ; ?>
  <div class="profile-header text-center" style="background-image: url(<?php echo $domain ; ?>assets/img/iceland.jpg);">
    <div class="container">
      <div class="container-inner">
        <img class="img-circle media-object" src="<?php echo $domain.$show_user->img_path ; ?>">
        <h3 class="profile-header-user"><?php echo $show_user->name; ?></h3>
        <input type="hidden" id="show_user_id" value="<?php echo $show_user->id; ?>">
        <div class="profile-header-bio"><?php echo $show_user->content ; ?></div>
      </div>

      <p class="profile-header-bio">
        <div class="row">
          <a href="#follow_list" class="text-inherit" data-toggle="modal" id="profile_follow_btn">
            <div class="col-md-offset-2 col-md-2 col-xs-6 profile-header-bio">
              フォロー<br><?php echo count($show_user->follow->get_follow()); ?> 
            </div>
          </a>
          <a href="#follower_list" class="text-inherit" data-toggle="modal" id="profile_follower_btn">
            <div class="col-md-2 col-xs-6 profile-header-bio">
              フォロワー<br><?php echo count($show_user->follow->get_follower()); ?>
            </div>
          </a>

          <div class="col-md-2 col-xs-6 profile-header-bio">
            いいね<br><?php echo $show_user->like->count() ; ?>
          </div>
           <div class="col-md-2 col-xs-6 profile-header-bio">
            いいねされた数<br>未実装
          </div>
        </div>
        <br>

        <?php if(!empty($_GET["id"]) && $_GET["id"] != $user->id): ?>
          <div class="row">
            <div class="col-md-offset-4 col-md-2 col-xs-6 profile-header-bio">
              <?php if($show_user->follow->is_follow($user->id)): ?>
                <button class="btn btn-default-outline btn-lg unfollow_btn" id="profileUn_<?php echo $show_user->id; ?>" style="color: white;">
                  <span class="icon icon-add-user"> フォロー中</span>
                </button>
              <?php else: ?>
                <button class="btn btn-default-outline btn-lg follow_btn" id="profile_<?php echo $show_user->id; ?>" style="color: white;">
                  <span class="icon icon-add-user"> フォロー</span>
                </button>
              <?php endif; ?>
            </div>

            <div class="col-md-1 col-xs-6 profile-header-bio">
              <button class="btn btn-default-outline btn-lg profile_dm_btn" style="color: white;" data-toggle="modal" href="#profile_msgModal" id="profile_dm_<?php echo $show_user->id ; ?> ">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>  DM
              </button>
            </div>
          </div>
        <?php endif ; ?>
      </p>
    </div>

    <nav class="profile-header-nav">
      <ul class="nav nav-tabs">
        <li class="active" id="profile_photo_menu">
          <a href="#">Photos</a>
        </li>
        <li id="profile_post_menu">
          <a href="#">Post</a>
        </li>
        <li id="profile_fav_menu">
          <a href="#">Favorite</a>
        </li>
      </ul>
    </nav>
  </div>


  <div id="profile_photo" class="container m-y-md" data-grid="images">
    <?php foreach ($show_user->post->display() as $image): ?>
      <div>
        <!-- <img data-width="640" data-height="400" data-action="zoom" src="../<?php //echo $image["img_path"] ; ?>"> -->
        <img data-action="zoom" src="../<?php echo $image["img_path"] ; ?>">
      </div>
    <?php endforeach; ?>
  </div>


  <div id="profile_post" class="container m-y-md" style="display: none;">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">

        <ul class="media-list media-list-stream c-w-md">
          <?php $timeline_posts = $show_user->post->user_get() ;?>
          <?php foreach($timeline_posts as $p): ?>
            <li class="media p-a">
              <a class="media-left" href="#">
                <img class="media-object img-circle" src="<?php echo $user->domain.$p['user_img'] ?>">
              </a>
              <div class="media-body">
                <div class="media-heading">
                  <small class="pull-right"><?php echo $p["created"]; ?></small>
                  <h5 class="m-b-0"><?php echo $p["user_name"]; ?></h5>
                </div>
                <img class="media-body-inline-img" src="<?php echo $domain.$p['img_path'] ; ?>">

                <div class="pull-right">
                  <?php if($user->like->post_check($p["id"])): ?>
                    <span class="fa fa-heart fa-2x fa-pink pull-right" aria-hidden="true"></span><br>
                  <?php else : ?>
                    <span class="fa fa-heart-o fa-2x pull-right" aria-hidden="true"></span><br>
                  <?php endif; ?>
                </div><br>

                <div class="pull-left">
                  <p>あああ</p>                  
                </div>

              </div>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
  </div>

  <div id="profile_fav" class="container m-y-md" style="display: none;">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <ul class="media-list media-list-stream c-w-md">

          <?php $likes_post = $show_user->like->user_likes() ;?>
          <?php foreach($likes_post as $p): ?>
            <li class="media p-a">
              <a class="media-left" href="#">
                <img class="media-object img-circle" src="../assets/img/avatar-fat.jpg">
              </a>
              <div class="media-body">
                <div class="media-heading">
                  <small class="pull-right"><?php echo $p["created"]; ?></small>
                  <h5 class="m-b-0"><?php echo $p["user_name"]; ?></h5>
                </div>
                <img class="media-body-inline-img" src="<?php echo $domain.$p['img_path'] ; ?>">
                <div class="pull-right">
                  <?php if($user->like->post_check($p["id"])): ?>
                    <span class="fa fa-heart fa-2x fa-pink pull-right" aria-hidden="true"></span><br>
                  <?php else : ?>
                    <span class="fa fa-heart-o fa-2x pull-right" aria-hidden="true"></span><br>
                  <?php endif; ?>
                </div><br>
                <p>あああ</p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- プロフィールからDMに飛ぶ -->

  <div class="modal fade" id="profile_msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Messages</h4>
        </div>

        <div class="modal-body p-a-0 js-modalBody">
          <div class="modal-body-scroller">

            <div class="modal-body" id="profile_dm_input_box">
              <input type="text" class="form-control" placeholder="Message" id="profile_dm_input">
            </div>

            <!-- ーーーーーーーーーーーーーDMーーーーーーーーーーーーー -->

            <div class="m-a js-conversation" id="profile_msg_conversation">
              <ul class="media-list media-list-conversation">

                <?php foreach ($user->message->get() as $m):?>

                  <?php if($m["user_id"] == $user->id): ?>
                    <!-- 右側 -->
                    <li class="media media-current-user m-b-md">
                      <div class="media-body">
                        <div class="media-body-text">
                          <?php echo $m["content"]; ?>
                        </div>
                        <div class="media-footer">
                          <small class="text-muted">
                            <a href="#"><?php echo $m["user_name"]; ?></a> <?php echo diff($m["created"]); ?>
                          </small>
                        </div>
                      </div>
                      <a class="media-right" href="#">
                        <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-dhg.png">
                      </a>
                    </li>
                  <?php else: ?>

                    <!-- 左側 -->
                    <li class="media m-b-md">
                      <a class="media-left" href="<?php echo $user->domain.'profile/?id='.$m['user_id'] ?>">
                        <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                      </a>
                      <div class="media-body">
                        <div class="media-body-text">
                          <?php echo $m["content"]; ?>
                        </div>
                        <div class="media-footer">
                          <small class="text-muted">
                            <a href="#"><?php echo $m["user_name"]; ?></a> <?php echo diff($m["created"]); ?>
                          </small>
                        </div>
                      </div>
                    </li>
                  <?php endif ; ?>
                <?php endforeach ; ?>

              </ul>
            </div>

            <!-- ーーーーーーーーーーーーーDMーーーーーーーーーーーーー -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>
</body>
</html>

