$(function () {
  $(".like_btn").click(function(){
    var id = $(this).attr("id");
    var tag = $("#"+id) ;
    if(tag.hasClass("fa-heart-o")){
      tag.removeClass("fa-heart-o") ;
      tag.addClass("fa-heart") ;
      ajax("POST","assets/ajax/likes_ajax.php",{post_id:id});
    }else{
      tag.addClass("fa-heart") ;
      tag.addClass("fa-pink") ;
      tag.removeClass("fa-heart-o") ;
      ajax("POST","assets/ajax/likes_ajax.php",{delete_post_id : id});
    }
  });
});

$(function (){
  $(".best_like_btn").click(function(){
    var id = $(this).attr("id").split("_")[1];
    var tag = $("#"+$(this).attr("id")) ;
    if(tag.hasClass("fa-star-o")){
      tag.removeClass("fa-star-o") ;
      tag.addClass("fa-star") ;
    }else{
      tag.addClass("fa-star") ;
      tag.addClass("fa-pink") ;
      tag.removeClass("fa-star-o") ;
    }
    ajax("POST","assets/ajax/likes_ajax.php",{best_post_id : id}) ;

  });
}) ;
