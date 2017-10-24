<!-- time line -->
<?php $posts = $post->post_get() ; ?>
<?php foreach ($posts as $p): ?>
  <li class="media list-group-item p-a">
    <a class="media-left" href="#">
      <img
      class="media-object img-circle"
      src="<?php echo $domain.$user->img_path ; ?>">
    </a>
    <div class="media-body">
      <div class="media-heading">
        <small class="pull-right text-muted">4 min</small>
        <h5><?php echo $p["user_name"] ; ?></h5>
      </div>


      <div class="media-body-inline-grid" data-grid="images">
        <div style="display: none">
          <img data-action="zoom" data-width="1048" data-height="700" src="<?php echo $domain.$p['img_path'] ; ?>">
        </div>
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
