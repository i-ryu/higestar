<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

if(!empty($_POST["post_id"])){
	$user->like->save(htmlspecialchars($_POST["post_id"])) ;
}

if(!empty($_POST["best_post_id"])){
	$user->like->best_save(htmlspecialchars($_POST["best_post_id"])) ;
}


if(!empty($_POST["delete_post_id"])){
	$user->like->save(htmlspecialchars($_POST["post_id"])) ;
}

if(!empty($_POST["delete_best_post_id"])){
	$user->like->best_save(htmlspecialchars($_POST["best_post_id"])) ;
}

if(!empty($_POST["check_id"])){
	$user->like->check_today($_POST["check_id"]) ;
}

?>