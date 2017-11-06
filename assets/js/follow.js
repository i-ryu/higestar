$(function(){
  $(".follow_btn")
  .mouseover(function (){
    $(".follow_btn span").text(" フォローする") ;
  })
  .mouseout(function(){
    $(".follow_btn span").text(" フォロー") ;
  })
  .click(function(){
    var id = $(this).attr("id");
    ajax("POST","assets/ajax/follow_ajax.php",{follow_id : id},function(flag){
      if(flag){
        $(".follow_btn").addClass("unfollow_btn") ;
        $(".follow_btn").removeClass("follow_btn") ;
        $(".unfollow_btn span").text(" フォロー中") ;
      } ;
    }) ;
  }) ;

  $(".unfollow_btn")
  .mouseover(function (){
    $(".unfollow_btn span").text(" フォロー解除") ;
  })
  .mouseout(function(){
    $(".unfollow_btn span").text(" フォロー中") ;
  })
  .click(function(){
    var id = $(this).attr("id");

    ajax("POST","assets/ajax/follow_ajax.php",{unfollow_id : id},function(flag){
      if(flag){
        $(".unfollow_btn").addClass("follow_btn") ;
        $(".unfollow_btn").removeClass("unfollow_btn") ;
        $(".follow_btn span").text(" フォロー") ;
      } ;
    }) ;
  }) ;
}) ;

// フォローモーダルからdmの送信

$(function(){
  $(".follow_dm_btn")
  .click(function(){
    modal_ini() ;
    var click_id = $(this).attr("id").split("_") ;
    var id = click_id[1];
    var user_id = click_id[2];

    $(".media-list-users").addClass("hide") ;
    $("#follow_msg_conversation").removeClass("hide") ;

    $('.js-msgGroup, .js-newMsg').addClass('hide') ;
    $(".media-list-users").addClass("hide") ;
    $("#follow_modal_title").html('<a href="#" class="js-gotoMsgs_dm">Back</a><p>@</p>') ;
    $("#follow_msg_conversation").removeClass("hide") ;
    $("#follow_modal_input").append('<div class="modal-body"><input type="text" class="form-control" placeholder="Message" id="follow_dm_input"></div>') ;

    $("#follow_dm_input").keypress(function( event ) {
      console.log("Momo");
      if ( event.which == 13 ) {
        var inputValue = $("#follow_dm_input").val() ;
        var obj = {"receive_id" : id,"message": inputValue} ;
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
            $("#follow_dm_input").val("");
          }else{
            console.log("送信できませんでした。") ;
          }

        }) ;
      } ;
    }) ;
  }) ;


  $(".follower_dm_btn")
  .click(function(){
    modal_ini() ;
    var click_id = $(this).attr("id").split("_") ;
    var id = click_id[2];
    var user_id = click_id[3];

    $(".media-list-users").addClass("hide") ;
    $("#follow_msg_conversation").removeClass("hide") ;

    $('.js-msgGroup, .js-newMsg').addClass('hide') ;
    $(".media-list-users").addClass("hide") ;
    $("#follower_modal_title").html('<a href="#" class="js-gotoMsgs_dm">Back</a><p>@</p>') ;
    $("#follower_msg_conversation").removeClass("hide") ;
    $("#follower_modal_input").append('<div class="modal-body"><input type="text" class="form-control" placeholder="Message" id="follower_dm_input"></div>') ;

    $("#follower_dm_input").keypress(function( event ) {
      console.log("Momo");
      if ( event.which == 13 ) {
        var inputValue = $("#follower_dm_input").val() ;
        var obj = {"receive_id" : id,"message": inputValue} ;
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
            $("#follower_dm_input").val("");
          }else{
            console.log("送信できませんでした。") ;
          }

        }) ;
      } ;
    }) ;
  }) ;

}) ;

$(function(){
  $("#follow_list").click(function () {
    console.log($(this));
    console.log("aaaa") ;
    modal_ini() ;
    $("#follow_modal_input").empty() ;
    $(".media-list-users").removeClass("hide") ;

    $('#navbar_msg_conversation').addClass('hide') ;
    $('#profile_msg_conversation').addClass('hide') ;
    
    $('.js-msgGroup, .js-newMsg').removeClass('hide') ;
    $('.modal-title').html('フォロー') ;
  });

}) ;


$(function(){
  $("#follow_list").click(function(){
    console.log("MOni") ;
  }) ;

}) ;
