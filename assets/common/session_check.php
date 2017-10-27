<?php 

$domain = "http://higesta.com/" ;

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/user.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/follow.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/post.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/message.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/like.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/function.php") ;


session_start();

// ログイン状態チェック
if (empty($_SESSION["id"])) {
  // login.phpへ移動する
  header("Location:".$domain."/login");
  exit();
}elseif(!empty($_SESSION["user_id"])){
  $user = new User($_SESSION["id"]) ;
}

if(!empty($_POST["update"])){
  $user->update(
    h($_POST["user_id"]) ,
    h($_POST["user_name"]) ,
    h($_POST["user_email"]) ,
    h($_POST["user_password"])
  ) ;
}

if(!empty($_POST["dm"])){

  $message->send("2",h($_POST["dm"])) ;
}

if(!empty($_POST["post"])){
  $post->upload($_POST["content"],$_FILES["upfile"]) ;
}


?>