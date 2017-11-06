
// navbarのDM
$(document).on('click', '.js-msgGroup', function () {
	modal_ini() ;
	var click_id = $(".list-group-item").attr("id") ;
	var receive_id = click_id.split("_")[2];
	var user_id = click_id.split("_")[3];

	$(".js-msgGroup, .js-newMsg").addClass("hide") ;
	$("#navbar_msg_conversation").removeClass("hide") ;
	$("#navbar_msg_title").html("<a href='#' class='js-gotoMsgs'>Back</a><p>@"+user_id+"</p>") ;
	$("#navbar_dm_input").append('<div class="modal-body"><input type="text" class="form-control" placeholder="Message" id="dm_input"></form></div>') ;

	$("#dm_input").keypress(function( event ) {
		if ( event.which == 13 ) {
			var inputValue = $("#dm_input").val() ;
			var obj = {
				"message" : inputValue,
				"receive_id": receive_id ,
			} ;
			ajax("POST","assets/ajax/message_ajax.php",obj,function(flag){
				if(flag){
					var txt_msg =[
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

$(function () {
	$('#msgModal').on('hide.bs.modal', function () {
		$("#navbar_dm_input").empty() ;
		$('#navbar_msg_conversation').addClass('hide') ;
		$('.js-msgGroup, .js-newMsg').removeClass('hide') ;
		$('.modal-title').html('メッセージ') ;
	});
});


// プロフィールからDMに飛ぶところ
$(function () {
	$(".profile_dm_btn").click(function(){
		modal_ini() ;
		console.log("Ominojbihvu") ;
		$("#profile_msg_conversation").removeClass("hide") ;
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
				ajax("POST","assets/ajax/message_ajax.php",obj,function(flag){
					if(flag){
						var txt_msg =[
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

