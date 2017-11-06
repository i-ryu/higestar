
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

  <form id="my_form">
    <input type="file" name="file_1">
    <button type="button" onclick="file_upload()">アップロード</button>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    function file_upload(){
      // フォームデータを取得
      var formdata = new FormData($("#my_form"));
      console.log(formdata) ;

      formdata = formdata.get(0);
      //  POSTでアップロード
      $.ajax({
        url  : "http://higesta.com/assets/ajax/upload.php",
        type : "POST",
        data : {filedata:formdata},

      })
      .done(function(data, textStatus, jqXHR){
        console.log("成功") ;
        alert(data);
      })
      .fail(function(jqXHR, textStatus, errorThrown){
        alert("fail");
      });
    }



  </script>
</body>
</html>