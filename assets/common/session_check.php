<?php 

$domain = "http://higesta.com/" ;

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/user.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/follow.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/post.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/message.php") ;
require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/function.php") ;


session_start();

// ログイン状態チェック
if (empty($_SESSION["id"])) {
  // login.phpへ移動する
  header("Location:".$domain."/login");
  exit();
}elseif(!empty($_SESSION["user_id"])){

  $user = new User($_SESSION["id"]) ;
  $follow = new Follow($_SESSION["id"]) ;
  $follow->get_follow();

  $post = new Post($_SESSION["id"]) ;
  $userSet = new UserSet() ;
  $users = $userSet->all_find_users() ;
  $dm = new Message($_SESSION["id"]) ;
}

if(!empty($_FILES["upfile"])){
  $post->upload($_FILES['upfile']) ;
}

if(!empty($_POST["update"])){
  var_dump($_POST) ;
  $user->update(
    h($_POST["user_id"]) ,
    h($_POST["user_name"]) ,
    h($_POST["user_email"]) ,
    h($_POST["user_password"])
  ) ;
}

?>