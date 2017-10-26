<!-- time line -->
<?php foreach ($post->post_get() as $p): ?>
  <li class="media list-group-item p-a">
    <a class="media-left" href="#">
      <img
      class="media-object img-circle"
      src="<?php echo $domain.$user->img_path ; ?>">
    </a>
    <div class="media-body">
      <div class="media-heading">
        <small class="pull-right text-muted"><?php echo $p["diff"]."前"; ?></small>
        <h5><?php echo $p["user_name"] ; ?></h5>
      </div>

      <div class="media-body-inline-grid" data-grid="images">
        <div style="display: none">
          <img data-action="zoom" data-width="1048" data-height="700" src="<?php echo $domain.$p['img_path'] ; ?>">
        </div><br>

          <span class="fa fa-heart-o fa-2x" onclick="like_save(<?php echo $p['id'] ;?>) ;return false ;" id="like_btn<?php echo $p['id'] ; ?>" aria-hidden="true"></span><br>
        <p><?php echo $p["content"]; ?></p>
      </div>


      <ul class="media-list m-b">
        <li class="media">
          <a class="media-left" href="#">
            <img
            class="media-object img-circle"
            src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
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
            src="<?php echo $domain ; ?>assets/img/avatar-mdo.png">
          </a>
          <div class="media-body">
            <strong>コメント者ユーザー名</strong>
            コメント
          </div>
        </li>
      </ul>
    </div>
  </li>
<?php endforeach; ?>

