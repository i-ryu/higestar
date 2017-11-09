
// navbarのDM
$(function(){
	$(".dm_user_list").click(function(){	
		modal_ini() ;
		var click_id = $(this).attr("id") ;
		console.log(click_id) ;
		var receive_id = click_id.split("_")[2];
		var user_id = click_id.split("_")[3];

		$(".js-msgGroup, .js-newMsg").addClass("hide") ;
		$("#navbar_msg_conversation").removeClass("hide") ;
		$("#navbar_msg_title").html("<a href='#' class='js-gotoMsgs'>Back</a><p class='text-center'>@"+user_id+"</p>") ;
		$("#navbar_dm_input").append('<div class="modal-body"><input type="text" class="form-control" placeholder="Message" id="dm_input"></form></div>') ;

		$("#navbar_msg_conversation").empty();

		ajax_json("POST","assets/ajax/follow_ajax.php",{message_user_id:receive_id},function(flag,result){
			if(flag){
				$("#navbar_msg_conversation").append(conversation(result)) ;
			} ;
		}) ;


		// メッセージの送信
		$("#dm_input").keypress(function( event ) {
			if ( event.which == 13 ) {
				var inputValue = $("#dm_input").val() ;

				var obj = {
					"message" : inputValue,
					"receive_id": receive_id ,
				} ;
				ajax("POST","assets/ajax/message_ajax.php",obj,function(flag,result){
					if(flag){
						var txt_msg = txt_msg_html(inputValue) ;
						$(".media-list-conversation").prepend(txt_msg) ;
						$("#dm_input").val("");
					}else{
						console.log("送信できませんでした。") ;
					}
				}) ;
				event.preventDefault();
			}
		});
	}) ;
}) ;


// プロフィールからDMに飛ぶところ
$(function () {
	$(".profile_dm_btn").click(function(){
		modal_ini() ;
		var click_id = $(this).attr("id").split("_") ;
		var user_id = click_id[2];
		$("#profile_msg_conversation").removeClass("hide") ;
		$("#profile_msg_conversation").empty() ;

		// ここに記述

		ajax_json("POST","assets/ajax/follow_ajax.php",{message_user_id : user_id},function(flag,result){
			if(flag){
				console.log(result) ;
				$("#profile_msg_conversation").append(conversation(result)) ;
			} ;
		}) ;


		var input_dom = '<input type="text" class="form-control" placeholder="Message" id="profile_dm_input">' ;
		$("#profile_dm_input_box").append(input_dom) ;
		$("#profile_dm_input").keypress(function( event ) {
			if ( event.which == 13 ) {
				var receive_id = $("#show_user_id").val() ;
				var inputValue = $("#profile_dm_input").val() ;
				console.log(receive_id) ;
				var obj = {
					"message" : inputValue,
					"receive_id": receive_id ,
				} ;
				ajax("POST","assets/ajax/message_ajax.php",obj,function(flag,result){
					if(flag){
						var txt_msg = txt_msg_html(inputValue) ;

						$(".media-list-conversation").prepend(txt_msg) ;
						$("#dm_input").val("");
					}else{
						console.log("送信できませんでした。") ;
					}
				}) ;
				event.preventDefault();
			}
		}) ;
	}) ;
}) ;

function txt_msg_html(inputValue){
	return [
	'<li class="media media-current-user m-b-md">',
	'<div class="media-body">',
	'<div class="media-body-text">',
	inputValue,
	'</div>',
	'<div class="media-footer">',
	'<small class="text-muted">',
	'<a href="#">'+$("#user_name").text()+'</a> at 4:20PM',
	'</small>',
	'</div>',
	'</div>',
	'<a class="media-right" href="#">',
	'<img class="img-circle media-object" src="http://higesta.com/assets/img/avatar-dhg.png">',
	'</a>',
	'</li>'].join('') ;
}
