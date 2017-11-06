
<div class="media list-group-item p-a">
  
  <a class="media-left" href="<?php echo $user->domain.'profile/?id='.$p["user_id"] ; ?>">
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

      <span class="like_btn fa fa-heart-o fa-2x" id="<?php echo $p['id'] ; ?>" aria-hidden="true"></span>
      <span class="best_like_btn fa fa-star-o fa-2x" aria-hidden="true" id="best_<?php echo $p['id'] ; ?>" aria-hidden="true"></span><br>
      <p><?php echo $p["content"]; ?></p>

    </div>
  </div>
</div>
