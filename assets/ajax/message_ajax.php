<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."assets/common/session_check.php") ;

var_dump($_POST);
if(!empty($_POST["receive_id"]) && !empty($_POST["message"])){
	$user->message->send(htmlspecialchars($_POST["receive_id"]),htmlspecialchars($_POST["message"])) ;
}

if(!empty($_POST["message_user_id"])){
	header('Content-type: application/json');
	echo json_encode($user->message->get($_POST["message_user_id"])) ;
}
?>