<!-- フォロー表示 -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">フォロー</h4>
      </div>

      <div class="modal-body p-a-0">
        <div class="modal-body-scroller">
          <ul class="media-list media-list-users list-group">
            <?php foreach ($follow->get_follow() as $f): ?>
              <li class="list-group-item">
                <div class="media">
                  <a href="./users.php?id=<?php echo $f['id'] ; ?>">
                    <a class="media-left" href="#">
                      <img class="media-object img-circle" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                    </a>
                    <div class="media-body">
                      <button class="btn btn-default btn-sm pull-right">
                        <span class="glyphicon glyphicon-user"></span> Follow
                      </button>
                      <strong><?php echo $f["user_name"]; ?></strong>
                      <p>@<?php echo $f["user_id"]; ?></p>
                    </div>
                  </a>
                </div>
              </li>
            <?php endforeach ; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- フォロー表示 -->
  <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">フォロワー</h4>
        </div>

        <div class="modal-body p-a-0">
          <div class="modal-body-scroller">
            <ul class="media-list media-list-users list-group">
              <?php foreach ($follow->get_follower() as $f): ?>
                <li class="list-group-item">
                  <div class="media">
                    <a href="./users.php?id=<?php echo $f['id'] ; ?>">
                      <a class="media-left" href="#">
                        <img class="media-object img-circle" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                      </a>
                      <div class="media-body">
                        <button class="btn btn-default btn-sm pull-right">
                          <span class="glyphicon glyphicon-user"></span> Follow
                        </button>
                        <strong><?php echo $f["user_name"]; ?></strong>
                        <p>@<?php echo $f["user_id"]; ?></p>
                      </div>
                    </a>
                  </div>
                </li>
              <?php endforeach ; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>