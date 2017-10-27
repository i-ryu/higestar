<?php

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/head.php") ; ?>

  <title>
    Profile &middot; 
  </title>


</head>


<body class="with-top-navbar">


  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/dm_modal.php") ; ?>
  <div class="growl" id="app-growl"></div>

  <!-- 元々navbarがあったところ -->
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/navbar.php") ; ?>

  <div class="profile-header text-center" style="background-image: url(<?php echo $domain ; ?>assets/img/iceland.jpg);">
    <div class="container">
      <div class="container-inner">
        <img class="img-circle media-object" src="../assets/img/ryuya.jpg">
        <h3 class="profile-header-user"><?php echo $user->name; ?></h3>
        <h3 class="profile-header-user"></h3>
        <div class="profile-header-bio"><?php echo $user->content ; ?></div>
      </div>

      <p class="profile-header-bio">
        <div class="row">
          <div class="col-md-offset-4 col-md-1 profile-header-bio">
            フォロー<br><?php echo count($user->follow->get_follow()); ?> 
          </div>
          <div class="col-md-1 profile-header-bio">
            フォロワー<br><?php echo count($user->follow->get_follower()); ?>
          </div>
          <div class="col-md-1 profile-header-bio">
            いいね<br>100
          </div>
          <div class="col-md-1 profile-header-bio">
            総いいね<br>100
          </div>
        </div>
      </p>
    </div>

    <!--
    <nav class="profile-header-nav">
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#">Photos</a>
        </li>
        <li>
          <a href="#">Others</a>
        </li>
        <li>
          <a href="#">Anothers</a>
        </li>
      </ul>
    </nav>-->
  </div>

  <div class="container m-y-md" data-grid="images">
    <?php foreach ($user->post->display() as $image): ?>
      <div>
        <img data-width="640" data-height="400" data-action="zoom" src="../<?php echo $image["img_path"] ; ?>">
      </div>
    <?php endforeach; ?>
  </div>

  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>
</body>
</html>

