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

  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/navbar.php") ; ?>
  
  <div class="container">
    <div>
      <h1>galary</h1>
    </div>

    <div id="profile_photo" class="container m-y-md" data-grid="images">
      <?php foreach ($user->all_user_img() as $image): ?>
        <div>
          <!-- <img data-width="640" data-height="400" data-action="zoom" src="../<?php //echo $image["img_path"] ; ?>"> -->
          <img data-action="zoom" src="../<?php echo $image["img_path"] ; ?>">
        </div>
      <?php endforeach; ?>
    </div>

  </div>

  <div class="container m-y-md">
    <div class="row">
      <?php $count = 1 ; ?>
      <?php foreach ($user->like->best_like_display() as $image): ?>
        <div class="col-md-4">
          <h1><?php echo $count; ?>位</h1>
          <ul class="media-list media-list-stream c-w-md">
            <li class="media p-a">
              <a class="media-left" href="#">
                <img class="media-object img-circle" src="../assets/img/avatar-dhg.png">
              </a>
              <div class="media-body">
                <div class="media-heading">
                  <small class="pull-right">4 min</small>
                  <h5 class="m-b-0">Dave Gamache</h5>
                </div>
                <img class="media-body-inline-img" src="../assets/img/instagram_17.jpg">
                <p>aaa</p>
              </div>
            </li>
          </ul>
        </div>
        <?php $count++; ?>
      <?php endforeach; ?>
    </div>
  </div>

  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>
</body>
</html>

