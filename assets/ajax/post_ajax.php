<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="http://higesta.com/assets/js/jquery.min.js"></script>

  <style media="screen">
  li{
    list-style: none;
  }
</style>

<title>Ajax Sample</title>
</head>
<body>
  <h1>Ajax sample</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul id="file_list">
      <li class="each_file">
        <input type="file" class="input_file" name="img_file" value="" accept="image/*">
      </li>
    </ul>
    <input type="submit" id="submit_btn" value="画像アップロード">
  </form>

  <script type="text/javascript">
    $(function(){
      var $fileList = $('#file_list');
      $fileList
      .on('click.deleteFile', '.delete_btn', function(){
        var $li = $(this).closest('.each_file');
        $li.remove();
        //inputタグ数が4つ未満になった場合に再度表示させる処理
        var $fileListLI = $('#file_list li input[name=img_file]');
        var inputFileNum = $fileListLI.length;
          //最後のinputタグを表示する処理
          var lastInputFile = $fileListLI.eq(-1);
          if (inputFileNum < 4){
            $(lastInputFile).show();
          }
          return false;
        })

      $fileList
      .on('change.inputFile', '.input_file', function(e){
        var $input = $(this),
        $li    = $input.closest('.each_file'),
        $newLi = $li.clone();
        $fileList.append($newLi);
        var file = e.target.files[0],
        fileName = file.name;

        reader = new FileReader();
        reader.readAsDataURL(file);

        reader.onloadend = function(){
          var fileReader = this;
          if(fileReader.result){
            var thumb = '<div class = "thumbnail"><img src = "' + fileReader.result + '" width = "150px" style = "max-width: 150px;">' + fileName + '<button class = "delete_btn">削除</button></div>';
            $li.append(thumb);
          }
          return this;
        };
        $input.hide();
        var $fileListLI = $('#file_list li input[name=img_file]');
        var inputFileNum = $fileListLI.length;
        var lastInputFile = $fileListLI.eq(-1);
        if (inputFileNum == 4){
          $(lastInputFile).hide();
        }

        var fd = new FormData();
        var targetFile = $fileListLI.eq(-2);
        fd.append( "file", $(targetFile).prop("files")[0]);


        $.ajax({
          url: 'file_api.php',
          type: 'post',
          data: fd,
          processData: false,
          contentType: false
        })
        .done(function(res){
          console.log("成功") ;
          console.log(res);
        })
        .fail(function(result){
          console.log("失敗") ;
          console.log(result);
        });
        return this;
      });
    });
  </script>

</body>
</html>
