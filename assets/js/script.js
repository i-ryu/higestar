var domain = "http://higesta.com/" ;

$(function () {
  $("#profile_photo_menu").click(function(event){
    var id = $(this).attr("id");

    $("#profile_post_menu").removeClass("active") ;
    $("#profile_fav_menu").removeClass("active") ;
    $("#profile_photo_menu").addClass("active") ;

    $("#profile_photo").show() ;
    $("#profile_post").hide() ;
    $("#profile_fav").hide() ;

    event.preventDefault();
  }) ;

  $("#profile_post_menu").click(function(event){

    $("#profile_photo_menu").removeClass("active") ;
    $("#profile_post_menu").addClass("active") ;
    $("#profile_fav_menu").removeClass("active") ;

    $("#profile_photo").hide() ;
    $("#profile_post").show() ;
    $("#profile_fav").hide() ;

    event.preventDefault();
  }) ;

  $("#profile_fav_menu").click(function(event){
    $("#profile_photo_menu,#profile_post_menu").removeClass("active") ;
    $("#profile_fav_menu").addClass("active") ;

    $("#profile_photo,#profile_post").hide() ;
    $("#profile_fav").show() ;

    event.preventDefault();
  }) ;
}) ;

$(function(){
  $(".js-gotoMsgs_dm")
  .click(function(){
    $input.remove() ;
    // $('.js-conversation').addClass('hide') ;
    $('.js-msgGroup, .js-newMsg').removeClass('hide') ;
    $('.modal-title').html('Messages') ;
  }) ;
}) ;

