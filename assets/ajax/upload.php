<?php

var_dump($_POST) ;
// 一時アップロード先ファイルパス
/*
$file_tmp  = $_FILES["file_1"]["tmp_name"];

// 正式保存先ファイルパス
var_dump($_FILES["file_1"]["name"]) ;
$file_save = "http://higesta.com/assets/ajax/" . $_FILES["file_1"]["name"];

// ファイル移動
$result = move_uploaded_file($file_tmp, $file_save);
if ( $result === true ) {
    echo "UPLOAD OK";
} else {
    echo "UPLOAD NG";
}
*/
?>