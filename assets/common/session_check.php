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

// プロフィールの更新
if(!empty($_POST["update"])){
  $user->update(
    h($_POST["user_id"]) ,
    h($_POST["user_name"]) ,
    h($_POST["user_email"]) ,
    h($_POST["user_password"])
  ) ;
}


// 投稿
if(!empty($_POST["post"])){
  $user->post->upload($_POST["content"],$_FILES["upfile"]) ;
}


// 検索
if(!empty($_GET["q"])){
  $user->post->search_get($_GET["q"]) ;
}


?>

