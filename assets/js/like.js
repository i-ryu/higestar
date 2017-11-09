$(function () {
  $(".like_btn").click(function(){
    var id = $(this).attr("id");
    var tag = $("#"+id) ;
    if(tag.hasClass("fa-heart-o")){
      tag.removeClass("fa-heart-o") ;
      tag.addClass("fa-heart") ;
      tag.addClass("fa-pink") ;
      ajax("POST","assets/ajax/likes_ajax.php",{post_id:id},function(){});
    }else{
      tag.addClass("fa-heart") ;
      tag.addClass("fa-pink") ;
      tag.removeClass("fa-heart-o") ;
      ajax("POST","assets/ajax/likes_ajax.php",{delete_post_id : id},function(){});
    }
  });
});

$(function (){
  $(".best_like_btn").click(function(){
    console.log($(this).attr("id")) ;
    var id = $(this).attr("id").split("_")[1];
    console.log(id) ;
    var tag = $("#"+$(this).attr("id")) ;

    ajax("POST","assets/ajax/likes_ajax.php",{check_id : id},function(flag,result){
      console.log(typeof result) ;
      console.log(result) ;
      if(result){
        $(".best_like_btn_decide").click(function(){
          tag.removeClass("fa-star-o") ;
          tag.addClass("fa-star") ;
          tag.addClass("fa-yellow") ;
          ajax("POST","assets/ajax/likes_ajax.php",{best_post_id : id},function(flag,result){
            $("#top_content").text("本日はもうすでにベストライクを使用済です。") ;
            $("#best_like_confirm_btn").addClass("hide") ;
          }) ;

        }) ;        
      }else{
        console.log("mom") ;
        $("#top_content").text("本日はもうすでにベストライクを使用済です。") ;
        $("#best_like_confirm_btn").addClass("hide") ;
      }

    }) ;



    // var id = $(this).attr("id").split("_")[1];
    // var tag = $("#"+$(this).attr("id")) ;
    // if(tag.hasClass("fa-star-o")){
    //   tag.removeClass("fa-star-o") ;
    //   tag.addClass("fa-star") ;
    //   tag.addClass("fa-yellow") ;
    // }else{
    //   tag.addClass("fa-star") ;
    //   tag.addClass("fa-pink") ;
    //   tag.removeClass("fa-star-o") ;
    // }
    // ajax("POST","assets/ajax/likes_ajax.php",{best_post_id : id},function(){}) ;

  });
}) ;
