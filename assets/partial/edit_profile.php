<ul class="list-group media-list media-list-stream">
  <li class="list-group-item p-a">
    <h3 class="m-a-0">プロフィールの編集</h3>
  </li>

  <li class="list-group-item media p-a">
    <div class="media-body">
      <form method="POST" action="">
        <div class="form-group">
          <label for="user_name">ユーザー名</label>
          <input type="text" name="user_name" class="form-control" value="<?php echo $user->name ; ?>">
          <br>          
        </div>

        <div class="form-group">
          <label for="user_id">ユーザーID</label>
          <input type="text" name="user_id" class="form-control" value="<?php echo $user->user_id ; ?>" >
          <br>          
        </div>


        <div class="form-group">
          <label for="user_email">メールアドレス</label>
          <input type="text" name="user_email" class="form-control" value="<?php echo $user->email ; ?>">
          <br>          
        </div>


        <div class="form-group">
          <label for="user_password">パスワードを入力</label>
          <input type="text" name="user_password" class="form-control" placeholder="パスワード">
          <br>          
        </div>
        <input type="hidden" name="update" value="true">
        <input type="submit" value="更新" class="form-control" class="btn btn-primary">
      </form>
    </div>
  </li>

</ul>
