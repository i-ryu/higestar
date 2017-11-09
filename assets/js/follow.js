
// フォローボタン
$(function(){
  $(".follow_btn")
  .mouseover(function (){
    var id = $(this).attr("id");
    $("#"+id+" span").text(" フォローする") ;
    if($("#"+id).hasClass("follow_btn")){
      $("#"+id+" span").text(" フォローする") ;      
    }else{
      $("#"+id+" span").text(" フォロー解除") ;
    }

  })
  .mouseout(function(){
    var id = $(this).attr("id");
    if($("#"+id).hasClass("follow_btn")){
      $("#"+id+" span").text(" フォロー中") ;      
    }else{
      $("#"+id+" span").text(" フォロー") ;
    }

  })
  .click(function(){
    var click_id = $(this).attr("id");
    var id = click_id.split("_")[1] ;

    ajax("POST","assets/ajax/follow_ajax.php",{follow_id : id},function(flag,result){
      if(flag){
        console.log($("#"+click_id)) ;
        $("#"+click_id).addClass("unfollow_btn") ;
        $("#"+click_id).removeClass("follow_btn") ;
        $("#"+click_id+" span").text(" フォロー中") ;
      } ;
    }) ;
  }) ;

  $(".unfollow_btn")
  .mouseover(function (){
    var id = $(this).attr("id");

    $("#"+id+" span").text(" フォロー解除") ;
  })
  .mouseout(function(){
    var id = $(this).attr("id");
    $("#"+id+" span").text(" フォロー中") ;
  })
  .click(function(){
    var click_id = $(this).attr("id");
    var id = click_id.split("_")[1] ;

    ajax("POST","assets/ajax/follow_ajax.php",{unfollow_id : id},function(flag,result){
      if(flag){
        console.log($("#"+click_id)) ;
        $("#"+click_id).addClass("follow_btn") ;
        $("#"+click_id).removeClass("unfollow_btn") ;
        $("#"+click_id +" span").text(" フォロー") ;
      } ;
    }) ;
  }) ;
}) ;

// フォローモーダルからdmの送信
$(function(){
  $(".follow_dm_btn")
  .click(function(){
    var click_id = $(this).attr("id").split("_") ;
    var id = click_id[1];
    var user_id = click_id[2];

    $("#follow_msg_conversation").empty();

    ajax_json("POST","assets/ajax/follow_ajax.php",{message_user_id : id},function(flag,result){
      if(flag){
        $("#follow_msg_conversation").append(conversation(result)) ;
      } ;
    }) ;


    var follow_keys = {
      "conversation" : "follow_msg_conversation",
      "title" : "follow_modal_title" ,
      "title_html" : "<a href='#' id='js-gotoFollow'>Back</a><p class='text-center'>@"+user_id+"</p>",
      "input_box" : "follow_modal_input" ,
      "input_form_id" :"follow_dm_input",
      "input_id" : "follow_dm_input" 
    } ;

    follow_modal_dm_btn(follow_keys,id,user_id) ;

    $("#js-gotoFollow").click(function(){
      modal_ini() ;
      $("#follow_modal_title").html('フォロー') ;
      $(".media-list-users").removeClass("hide") ;
    }) ;
  }) ;


  $(".follower_dm_btn")
  .click(function(){

    var click_id = $(this).attr("id").split("_") ;
    var id = click_id[2];
    var user_id = click_id[3];
    $("#follower_msg_conversation").empty();

    ajax_json("POST","assets/ajax/follow_ajax.php",{message_user_id:id},function(flag,result){
      if(flag){
        $("#follower_msg_conversation").append(conversation(result)) ;
      } ;
    }) ;

    var follower_keys = {
      "conversation" : "follower_msg_conversation",
      "title" : "follower_modal_title" ,
      "title_html" : "<a href='#' id='js-gotoFollower'>Back</a><p class='text-center'>@"+user_id+"</p>",
      "input_box" : "follower_modal_input" ,
      "input_form_id" :"follower_dm_input",
      "input_id" : "follower_dm_input" 
    } ;

    follow_modal_dm_btn(follower_keys,id,user_id);

    $("#js-gotoFollower").click(function(){
      modal_ini() ;
      $("#follower_modal_title").html('フォロワー') ;
      $(".media-list-users").removeClass("hide") ;
    }) ;
  }) ;
}) ;


function follow_modal_dm_btn(obj_id,id,user_id){
  modal_ini() ;

  $(".media-list-users").addClass("hide") ;
  $("#"+obj_id["conversation"]).removeClass("hide") ;

  $('.js-msgGroup, .js-newMsg').addClass('hide') ;
  $(".media-list-users").addClass("hide") ;
  $("#"+obj_id["title"]).html(obj_id["title_html"]) ;
  $("#"+obj_id["conversation"]).removeClass("hide") ;
  $("#"+obj_id["input_box"]).append('<div class="modal-body"><input type="text" class="form-control" placeholder="Message" id="'+obj_id["input_form_id"]+'"></div>') ;
  
  $("#"+obj_id["input_id"]).keypress(function( event ) {
    if ( event.which == 13 ) {
      var inputValue = $("#"+obj_id["input_id"]).val() ;
      var obj = {"receive_id" : id,"message": inputValue} ;
      ajax("POST","assets/ajax/message_ajax.php",obj,function(flag,result){
        if(flag){
          var txt_msg =[
          '<li class="media media-current-user m-b-md">',
          '<div class="media-body">',
          '<div class="media-body-text">',
          inputValue,
          '</div>',
          '<div class="media-footer">',
          '<small class="text-muted">',
          '<a href="#">'+$("#user_name").text()+'</a> 時刻を表示',
          '</small>',
          '</div>',
          '</div>',
          '<a class="media-right" href="#">',
          '<img class="img-circle media-object" src="http://higesta.com/assets/img/avatar-dhg.png">',
          '</a>',
          '</li>'].join('') ;

          $(".media-list-conversation").prepend(txt_msg) ;
          $("#"+obj_id["input_id"]).val("");
        }else{
          console.log("送信できませんでした。") ;
        }
      }) ;
    } ;
  }) ;
};

$(function(){
  $("#profile_follow_btn").click(function () {
    modal_ini() ;
    $("#follow_modal_input").empty() ;
    $(".media-list-users").removeClass("hide") ;

    $('.js-msgGroup, .js-newMsg').removeClass('hide') ;
    $('.modal-title').html('フォロー') ;
  });

  $("#profile_follower_btn").click(function(){
    modal_ini() ;
    $("#follower_modal_input").empty() ;
    $(".media-list-users").removeClass("hide") ;

    $('.js-msgGroup, .js-newMsg').removeClass('hide') ;
    $('.modal-title').html('フォロワー') ;
  }) ;

}) ;


$(function(){
  $("#nab_message").click(function(){
    modal_ini() ;
    $("#navbar_msg_title").html('メッセージ') ;
    $(".media-list-users").removeClass("hide") ;
    $("#follower_msg_conversation").addClass("hide") ;
  }) ;

  $("#sp_follow").click(function(){
    modal_ini() ;
    $("#follow_modal_title").html('フォロー') ;
    $(".media-list-users").removeClass("hide") ;
    $("#follow_msg_conversation").addClass("hide") ;
  }) ;

  $("#sp_follower").click(function(){
    modal_ini() ;
    $("#follower_modal_title").html('フォロワー') ;
    $(".media-list-users").removeClass("hide") ;
    $("#follower_msg_conversation").addClass("hide") ;
  }) ;
}) ;


function conversation(data){
  var ul = $("<ul>", {
    class: "media-list media-list-conversation",
  }) ; 

  data.forEach(function(record){
    if(record["user_id"] == $("#login_user_id").val()){
      create_talk("right",record,ul) ;
    }else{
      create_talk("left",record,ul) ;
    }
  }) ;
  return ul ;
}

function create_talk(position,record,ul){

  var body_box = $("<div>",{
    class: "media-body",
  }) ;

  var body_text = $("<div>",{
    class: "media-body-text",
    text:record["content"],
  }) ;

  var footer = $("<div>",{
    class:"media-footer",
  }) ;

  var text_muted = $("<small>",{
    class:"text-muted",
  }) ;

  var user_link = $("<a>",{
    href:"#",
    text:record["user_name"],
  }) ;

  var message_date = $("<p>",{
    text:record["created"],
  }) ;

  if(position == "right"){
    var li_right = $("<li>", {
      class: "media media-current-user m-b-md"
    }) ;

    var a_right = $("<a>",{
      class: "media-right",
      href:"#",
    }) ;

    var img = $("<img>",{
      class : "img-circle media-object",
      src : "http://higesta.com/"+record["img_path"]
    }) ;

    body_box.append(body_text) ;
    text_muted.append(user_link) ;
    footer.append(text_muted) ;
    footer.append("  "+record["created"]) ;
    body_box.append(footer) ;

    a_right.append(img) ;

    li_right.append(body_box) ;
    li_right.append(a_right) ;
    ul.append(li_right) ;
  }else if(position == "left"){
    var li_left = $("<li>",{
      class : "media m-b-md"
    }) ;

    var a_left = $("<a>",{
      class : "media-left" ,
      href : "http://higesta.com/profile/?id="+record["user_id"]
    }) ;

    var img_left = $("<img>",{
      class : "img-circle media-object",
      src : "http://higesta.com/"+record["img_path"],
    }) ;

    a_left.append(img_left) ;

    body_box.append(body_text) ;

    text_muted.append(user_link) ;
    footer.append(text_muted) ;
    footer.append(message_date) ;
    body_box.append(footer) ;

    li_left.append(a_left) ;
    li_left.append(body_box) ;
    ul.append(li_left) ;
  }

  return ul ;
  
}
