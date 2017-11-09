<!-- time line -->
<?php foreach ($timeline_posts as $p): ?>
  <li class="media list-group-item p-a">
    <a class="media-left" href="<?php echo $user->domain.'profile/?id='.$p["user_id"] ; ?>">
      <img
      class="media-object img-circle"
      src="<?php echo $domain.$p['user_img'] ; ?>">
    </a>
    <div class="media-body">
      <div class="media-heading">
        <small class="pull-right text-muted"><?php echo diff($p["created"])."前"; ?></small>
        <h5><?php echo $p["user_name"] ; ?></h5>
      </div>

      <div class="media-body-inline-grid" data-grid="images">
        <div style="display: none">
          <img data-action="zoom"  src="<?php echo $domain.$p['img_path'] ; ?>">
        </div><br>

        <div class="pull-right">
          <?php if($user->like->post_check($p["id"])): ?>
            <span class="like_btn fa fa-heart fa-2x fa-pink" id="<?php echo $p['id'] ; ?>" aria-hidden="true"></span>
            &nbsp; &nbsp;
            <a href="#best_like_alert" data-toggle="modal">
            <span class="best_like_btn fa fa-star-o fa-2x" aria-hidden="true" id="best_<?php echo $p['id'] ; ?>" aria-hidden="true"></span><br>
            </a>
          <?php else: ?>
            <span class="like_btn fa fa-heart-o fa-2x" id="<?php echo $p['id'] ; ?>" aria-hidden="true"></span>
            &nbsp; &nbsp;
              <span class="best_like_btn fa fa-star-o fa-2x" aria-hidden="true" id="best_<?php echo $p['id'] ; ?>" aria-hidden="true">
              </span><br>
            
          <?php endif ; ?>
        </div>
        <br>
        <div class="pull-left">
          <p><?php echo $p["content"]; ?></p>
        </div>
      </div>

<!--       <ul class="media-list m-b">
        <li class="media">
          <a class="media-left" href="#">
            <img
            class="media-object img-circle"
            src="<?php //echo $domain ; ?>assets/img/avatar-fat.jpg">
          </a>
          <div class="media-body">
            <strong>コメント者ユーザー名</strong>
            コメント
          </div>
        </li>
        <li class="media">
          <a class="media-left" href="#">
            <img
            class="media-object img-circle"
            src="<?php //echo $domain ; ?>assets/img/avatar-mdo.png">
          </a>
          <div class="media-body">
            <strong>コメント者ユーザー名</strong>
            コメント
          </div>
        </li>
      </ul> -->
    </div>
  </li>
<?php endforeach; ?>


