<nav class="navbar navbar-inverse navbar-fixed-top app-navbar" style="background-color: black;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $user->domain ; ?> ">
        <img src="<?php echo $user->domain ;?>assets/img/higesta.jpg" alt="brand">
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav hidden-xs">
          <li class="active" id="nav_home"><a href="<?php echo $user->domain ; ?>">Home</a></li>
          <li id="nav_profile"><a href="<?php echo $user->domain; ?>profile/">Profile</a></li>
          <li id="nav_favorite"><a href="<?php echo $user->domain; ?>favorite/">Favorite</a></li>
          <li id="nav_favorite"><a href="<?php echo $user->domain; ?>ranking/">Ranking</a></li>
          <li id="nav_galary"><a href="<?php echo $user->domain; ?>galary/">Galary</a></li>
          <li id="nab_message"><a data-toggle="modal" href="#msgModal">Messages</a></li>
          <!-- <li><a href="<?php //echo $user->domain ; ?>docs/">Docs</a></li> -->
      </ul>

        <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
          <li>
            <a class="app-notifications" href="<?php echo $user->domain ?>notifications/">
              <span class="icon icon-bell"></span>
            </a>
          </li>
          <li>
            <button class="btn btn-default navbar-btn navbar-btn-avitar" data-toggle="popover">
              <img class="img-circle" src="<?php echo $user->domain.$user->img_path ; ?>">
            </button>
          </li>
        </ul>


      <form class="navbar-form navbar-right app-search" role="search" method="GET" action="<?php echo $user->domain ; ?>search">
        <div class="form-group">
          <input type="text" class="form-control" data-action="grow" placeholder="Search" name="q">
        </div>
      </form>

      <input type="hidden" id="login_user_id" value="<?php echo $user->id ; ?>">

      <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
        <li><a href="<?php echo $user->domain ; ?>">Home</a></li>
        <li><a href="<?php echo $user->domain ; ?>profile/">Profile</a></li>
        <li><a href="<?php echo $user->domain ; ?>notifications/">Notifications</a></li>
        <li><a data-toggle="modal" href="#msgModal">Messages</a></li>
        <li><a href="<?php echo $user->domain ; ?>docs/">Docs</a></li>
        <li><a href="#" data-action="growl">Growl</a></li>
        <li><a href="<?php echo $user->domain ; ?>login/">Logout</a></li>
      </ul>

      <ul class="nav navbar-nav hidden">
        <li><a href="#" data-action="growl">Growl</a></li>
        <li><a href="<?php echo $user->domain ; ?>edit">プロフィール編集</a></li>
        <li><a href="<?php echo $user->domain ; ?>login/">ログアウト</a></li>
        <li><a href="<?php echo $user->domain ; ?>contact/">苦情はこちら</a></li>
      </ul>
    </div>
  </div>
</nav>

