<?php 

$domain = "http://higesta.com/" ;

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/head.php") ; ?>

  <title>
    Notifications &middot; 
  </title>
</head>


<body class="with-top-navbar">
  <div class="growl" id="app-growl"></div>
  <?php include("../assets/partial/navbar.php") ; ?>
  <?php include("../assets/partial/dm_modal.php") ; ?>

  <div class="container p-t-md">
    <div class="row">
      <div class="col-md-3">

        <div class="list-group m-b-md">
          <a href="#" class="list-group-item">
            <span class="icon icon-chevron-thin-right pull-right"></span>
            Notifications
          </a>
          <a href="#" class="list-group-item">
            <span class="icon icon-chevron-thin-right pull-right"></span>
            Mentions
          </a>
        </div>

        <?php include("../assets/partial/simple_photo.php") ; ?>
        <?php include("../assets/partial/trend.php") ; ?>
      </div>


      <!-- 真ん中 -->
      <div class="col-md-6">
        <?php include("../assets/partial/notification.php") ; ?>
      </div>

      <!-- 右側 -->
      <div class="col-md-3">
        <?php include("../assets/partial/recomment_user.php") ; ?>

        <div class="panel panel-default">
          <div class="panel-body">
            © 2015 Bootstrap

            <a href="#">About</a>
            <a href="#">Help</a>
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
            <a href="#">Cookies</a>
            <a href="#">Ads </a>

            <a href="#">info</a>
            <a href="#">Brand</a>
            <a href="#">Blog</a>
            <a href="#">Status</a>
            <a href="#">Apps</a>
            <a href="#">Jobs</a>
            <a href="#">Advertise</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>
</body>
</html>

