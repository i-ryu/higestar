function ajax(post_type,post_url,post_data,callback){
  var domain = "http://higesta.com/";
  $.ajax({
    type : post_type,
    url : domain+post_url,
    data : post_data,
  })
  .done(function(result){
    // ajax成功時の処理
    console.log("ajax成功");
    callback(true,result) ;
  })
  .fail(function(result){
    // ajax失敗時の処理
    console.log("ajax失敗");
    callback(false,result) ;
  });
}

function ajax_json(post_type,post_url,post_data,callback){
  var domain = "http://higesta.com/";
  $.ajax({
    type : post_type,
    dataType : "json",
    url : domain+post_url,
    data : post_data,
  })
  .done(function(result){
    // ajax成功時の処理
    console.log("ajax成功");
    callback(true,result) ;
  })
  .fail(function(result){
    // ajax失敗時の処理
    console.log("ajax失敗");
    callback(false,result) ;
  });
}

function modal_ini(){

  // input empty
  $("#navbar_dm_input").empty() ;
  $("#follow_modal_input").empty() ;
  $("#follower_modal_input").empty() ;
  $("#profile_dm_input_box").empty() ;

  // トーク
  $("#navbar_msg_conversation").addClass("hide") ;
  $("#follow_msg_conversation").addClass("hide") ;
  $("#follower_msg_conversation").addClass("hide") ;
  $("#profile_msg_conversation").addClass("hide") ;
}


function send_date(){

}
