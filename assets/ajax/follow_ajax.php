<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

if(!empty($_POST["follow_id"])){
	$user->follow->add(htmlspecialchars($_POST["follow_id"])) ;
}

if(!empty($_POST["unfollow_id"])){
	$user->follow->remove(htmlspecialchars($_POST["unfollow_id"])) ;
}

if(!empty($_POST["message_user_id"])){
	header('Content-type: application/json');
	echo json_encode($user->message->get($_POST["message_user_id"])) ;
}



?>