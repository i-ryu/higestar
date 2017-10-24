  <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <!-- <button type="button" class="btn btn-sm btn-primary pull-right app-new-msg js-newMsg">New message</button> -->
          <h4 class="modal-title">Messages</h4>
        </div>

        <div class="modal-body p-a-0 js-modalBody">
          <div class="modal-body-scroller">
            <div class="media-list media-list-users list-group js-msgGroup">

              <?php foreach ($dm->get_users() as $d): ?>
                <a href="#" class="list-group-item">
                  <div class="media">
                    <span class="media-left">
                      <img class="img-circle media-object" src="<?php echo $domain ?>assets/img/avatar-fat.jpg">
                    </span>
                    <div class="media-body">
                      <strong><?php echo $d["user_name"]; ?></strong>
                      <div class="media-body-secondary">
                        <?php echo $d["content"]; ?>
                      </div>
                    </div>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>


            <!-- ーーーーーーーーーーーーーDMーーーーーーーーーーーーー -->

            <div class="hide m-a js-conversation">
              <ul class="media-list media-list-conversation">
                <li class="media media-current-user m-b-md">
                  <div class="media-body">
                    <div class="media-body-text">
                      よよよよよ
                    </div>
                    <div class="media-footer">
                      <small class="text-muted">
                        <a href="#">りゅうや</a> at 4:20PM
                      </small>
                    </div>
                  </div>
                  <a class="media-right" href="#">
                    <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-dhg.png">
                  </a>
                </li>

                <li class="media m-b-md">
                  <a class="media-left" href="#">
                    <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                  </a>
                  <div class="media-body">
                    <div class="media-body-text">
                      ヴォノに
                    </div>
                    <div class="media-body-text">
                      vポエmゔぉpまぽ
                    </div>
                    <div class="media-body-text">
                      vmkrのっvんをゔぉ
                    </div>
                    <div class="media-footer">
                      <small class="text-muted">
                        <a href="#">Fat</a> at 4:28PM
                      </small>
                    </div>
                  </div>
                </li>

                <li class="media m-b-md">
                  <a class="media-left" href="#">
                    <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-mdo.png">
                  </a>
                  <div class="media-body">
                    <div class="media-body-text">
                      mヴォpふぇにん
                    </div>
                    <div class="media-body-text">
                      ヴォペfみvに
                    </div>
                    <div class="media-footer">
                      <small class="text-muted">
                        <a href="#">Mark Otto</a> at 4:20PM
                      </small>
                    </div>
                  </div>
                </li>

                <li class="media media-current-user m-b-md">
                  <div class="media-body">
                    <div class="media-body-text">
                      ああああ
                    </div>
                    <div class="media-footer">
                      <small class="text-muted">
                        <a href="#">りゅうや</a> at 4:20PM
                      </small>
                    </div>
                  </div>
                  <a class="media-right" href="#">
                    <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-dhg.png">
                  </a>
                </li>

                <li class="media m-b-md">
                  <a class="media-left" href="#">
                    <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-fat.jpg">
                  </a>
                  <div class="media-body">
                    <div class="media-body-text">
                      ああああ
                    </div>
                    <div class="media-body-text">
                      いいい
                    </div>
                    <div class="media-body-text">
                      えええ
                    </div>
                    <div class="media-footer">
                      <small class="text-muted">
                        <a href="#">Fat</a> at 4:28PM
                      </small>
                    </div>
                  </div>
                </li>

                <li class="media m-b">
                  <a class="media-left" href="#">
                    <img class="img-circle media-object" src="<?php echo $domain ; ?>assets/img/avatar-mdo.png">
                  </a>
                  <div class="media-body">
                    <div class="media-body-text">
                      ええええ
                    </div>
                    <div class="media-body-text">
                      おおお
                    </div>
                    <div class="media-footer">
                      <small class="text-muted">
                        <a href="#">Mark Otto</a> at 4:20PM
                      </small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <!-- ーーーーーーーーーーーーーDMーーーーーーーーーーーーー -->

          </div>
        </div>
      </div>
    </div>
  </div>