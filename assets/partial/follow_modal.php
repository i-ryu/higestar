<!-- フォロー表示 -->
<div class="modal fade" id="follow_list" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="follow_modal_title">フォロー</h4>
      </div>

      <div class="modal-body p-a-0 js-modalBody">
        <div class="modal-body-scroller">

          <ul class="media-list media-list-users list-group">
            <?php foreach ($user->follow->get_follow() as $f): ?>
              <li class="list-group-item">
                <div class="media">
                  <a href="<?php echo $user->domain; ?>profile/?id=<?php echo $f['id'] ; ?>" class="media-left" href="#">
                    <img class="media-object img-circle" src="<?php echo $domain.$f['img_path'] ; ?>">
                  </a>
                  <div class="media-body">
                    <button type="submit" name="follow" class="btn btn-default btn-sm pull-right unfollow_btn" value="<?php echo $f['id'] ; ?>" id="follow_<?php echo $f['id']; ?>">
                      <span class="glyphicon glyphicon-user">フォロー中</span>
                    </button>

                    <button class="btn btn-default btn-sm follow_dm_btn pull-right" id="dm_<?php echo $f['id'].'_'.$f['user_id'] ; ?> ">                      
                      <span class="fa fa-envelope-o" aria-hidden="true"></span>  DM
                    </button>

                    <strong><?php echo $f["user_name"]; ?></strong>
                    <p>@<?php echo $f["user_id"]; ?></p>
                  </div>
                </div>
              </li>
            <?php endforeach ; ?>
          </ul>

          <div id="follow_modal_input"></div>

          <div class="hide m-a js-conversation" id="follow_msg_conversation">
            <ul class="media-list media-list-conversation">

              <?php foreach ($user->message->get() as $m):?>

                <?php if($m["user_id"] == $user->id): ?>
                  <!-- 右側 -->
                  <li class="media media-current-user m-b-md">
                    <div class="media-body">
                      <div class="media-body-text">
                        <?php echo $m["content"]; ?>
                      </div>
                      <div class="media-footer">
                        <small class="text-muted">
                          <a href="#"><?php echo $m["user_name"]; ?></a> <?php echo diff($m["created"]); ?>
                        </small>
                      </div>
                    </div>
                    <a class="media-right" href="#">
                      <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-dhg.png">
                    </a>
                  </li>
                <?php else: ?>

                  <!-- 左側 -->
                  <li class="media m-b-md">
                    <a class="media-left" href="<?php echo $user->domain.'profile/?id='.$m['user_id'] ?>">
                      <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                    </a>
                    <div class="media-body">
                      <div class="media-body-text">
                        <?php echo $m["content"]; ?>
                      </div>
                      <div class="media-footer">
                        <small class="text-muted">
                          <a href="#"><?php echo $m["user_name"]; ?></a> <?php echo diff($m["created"]); ?>
                        </small>
                      </div>
                    </div>
                  </li>
                <?php endif ; ?>
              <?php endforeach ; ?>
            </ul>
          </div>
          <!-- ーーーーーーーーーーーーーDMーーーーーーーーーーーーー -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- フォロワー表示 -->
<div class="modal fade" id="follower_list" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="follower_modal_title">フォロワー</h4>
      </div>

      <div class="modal-body p-a-0">
        <div class="modal-body-scroller">
          <ul class="media-list media-list-users list-group">
            <?php foreach ($user->follow->get_follower() as $f): ?>
              <li class="list-group-item">
                <div class="media">
                  <a class="media-left" href="<?php echo $user->domain ; ?>profile/?id=<?php echo $f['id'] ; ?>">
                    <img class="media-object img-circle" src="<?php echo $domain.$f['img_path'] ; ?>">
                  </a>
                  <div class="media-body">

                    <?php if($user->follow->follow_check($f["id"])): ?>
                      <button class="btn btn-default btn-sm pull-right unfollow_btn" id="follower_<?php echo $f['id']; ?>">
                        <span class="glyphicon glyphicon-user">フォロー中</span>
                      </button>
                    <?php else: ?>
                      <button class="btn btn-default btn-sm pull-right follow_btn" id="follow_<?php echo $f['id']; ?>">
                        <span class="glyphicon glyphicon-user">フォロー</span>
                      </button>
                    <?php endif; ?>
                    <button class="btn btn-default btn-sm follower_dm_btn pull-right" id="follower_dm_<?php echo $f['id'].'_'.$f['user_id'] ; ?> ">                      
                      <span class="fa fa-envelope-o" aria-hidden="true"></span>  DM
                    </button>


                    <strong><?php echo $f["user_name"]; ?></strong>
                    <p>@<?php echo $f["user_id"]; ?></p>
                  </div>
                </div>
              </li>
            <?php endforeach ; ?>
          </ul>

          <div id="follower_modal_input"></div>

          <div class="hide m-a js-conversation" id="follower_msg_conversation">
            <ul class="media-list media-list-conversation">

              <?php foreach ($user->message->get() as $m):?>

                <?php if($m["user_id"] == $user->id): ?>
                  <!-- 右側 -->
                  <li class="media media-current-user m-b-md">
                    <div class="media-body">
                      <div class="media-body-text">
                        <?php echo $m["content"]; ?>
                      </div>
                      <div class="media-footer">
                        <small class="text-muted">
                          <a href="#"><?php echo $m["user_name"]; ?></a> <?php echo diff($m["created"]); ?>
                        </small>
                      </div>
                    </div>
                    <a class="media-right" href="#">
                      <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-dhg.png">
                    </a>
                  </li>
                <?php else: ?>

                  <!-- 左側 -->
                  <li class="media m-b-md">
                    <a class="media-left" href="<?php echo $user->domain.'profile/?id='.$m['user_id'] ?>">
                      <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                    </a>
                    <div class="media-body">
                      <div class="media-body-text">
                        <?php echo $m["content"]; ?>
                      </div>
                      <div class="media-footer">
                        <small class="text-muted">
                          <a href="#"><?php echo $m["user_name"]; ?></a> <?php echo diff($m["created"]); ?>
                        </small>
                      </div>
                    </div>
                  </li>
                <?php endif ; ?>
              <?php endforeach ; ?>
            </ul>
          </div>
          <!-- ーーーーーーーーーーーーーDMーーーーーーーーーーーーー -->

        </div>
      </div>
    </div>
  </div>
</div>