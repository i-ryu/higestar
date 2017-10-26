
<div class="panel panel-default panel-profile m-b-md">
  <div class="panel-heading" style="background-image: url(<?php echo $domain ; ?>assets/img/iceland.jpg);"></div>
  <div class="panel-body text-center">
    <a href="<?php echo $domain ; ?>profile/">
      <img class="panel-profile-img" src="<?php echo $domain.$user->img_path ; ?>">
    </a>

    <h5 class="panel-title">
      <a class="text-inherit" href="<?php echo $domain ; ?>profile/"><?php echo $user->name; ?></a>
    </h5>

    <p class="m-b-md"><?php echo $user->content; ?></p>

    <ul class="panel-menu">
      <li class="panel-menu-item">
        <a href="#follow_list" class="text-inherit" data-toggle="modal">
          フォロー
          <h5 class="m-y-0"><?php echo count($follow->get_follow()); ?></h5>
        </a>
      </li>

      <li class="panel-menu-item">
        <a href="#follower_list" class="text-inherit" data-toggle="modal">
          フォロワー
          <h5 class="m-y-0"><?php echo count($follow->get_follower()); ?></h5>
        </a>
      </li>

    </ul>

  </div>
</div>