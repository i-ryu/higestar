<div class="panel panel-default visible-md-block visible-lg-block">
  <div class="panel-body">
    <h5 class="m-t-0">髭写真 <small>· <a href="#">Edit</a></small></h5>
    <div data-grid="images" data-target-height="150">
      <?php foreach ($user->post->display() as $image): ?>
        <div>
          <!-- <img data-width="640" data-height="640" data-action="zoom" src="<?php echo $domain.$image["img_path"] ; ?>"> -->
          <img data-action="zoom" src="<?php echo $domain.$image["img_path"] ; ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
