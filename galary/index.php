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


  <?php include($_SERVER["DOCUMENT_ROOT"]."assets/partial/read_js.php") ; ?>
</body>
</html>

