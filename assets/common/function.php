<?php 

$domain = "http://higesta.com/" ;

function h($str){
	return htmlspecialchars($str) ;
}

function upload_img($file_data){
	$msgs = [] ;
	// 全てのパラメータを正しい構造で受け取った時のみ実行
	if (
		isset($file_data["upfile"]["error"]) &&
		is_int($file_data["upfile"]["error"])
	) {

		try {
			/* ファイルのチェック */
			switch ($file_data["upfile"]["error"]) {
				case UPLOAD_ERR_OK:
              	// エラー無し
				break;
				case UPLOAD_ERR_NO_FILE:
                // ファイル未選択
				throw new RuntimeException("ファイルを選択してください。");
				case UPLOAD_ERR_INI_SIZE:
				case UPLOAD_ERR_FORM_SIZE:
                // 許可サイズを超過
				throw new RuntimeException("ファイルのサイズが大きすぎます。");
				default:
				throw new RuntimeException("エラー");
			}

			if (!in_array(
				@exif_imagetype($file_data["upfile"]["tmp_name"]),
				array(
					IMAGETYPE_GIF,
					IMAGETYPE_JPEG,
					IMAGETYPE_PNG,
				),
				true
			)) {
            // JPEG, PNG, GIF ではない
				throw new RuntimeException("画像を選択してください。");
			}

			if (!preg_match('/(?<!\.php)(?<!\.cgi)(?<!\.py)(?<!\.rb)\z/i', $file_data["upfile"]["name"])) {
            // トロイの木馬を弾くため、実行可能な拡張子は禁止する
				throw new RuntimeException(
					"画像を選択してください。" .$file_data["upfile"]["name"]
				);
			}

			$dir = $_SERVER["DOCUMENT_ROOT"]."user_images/" ;

			/* ディレクトリの生成 */
			if (!is_dir($dir)) {
      			// ディレクトリが存在していなければ生成を試みる
				if (!mkdir($dir)) {
			        // ディレクトリ生成に失敗
					throw new RuntimeException("ディレクトリ生成に失敗:".$dir);
				}
				// パーミッションを0777に設定
				chmod($dir, 0777);
				$msgs[] = array('blue', 'Created directory "' . $dir . '"');
			}

			/* ファイルの移動 */
			if (!move_uploaded_file($file_data["upfile"]["tmp_name"], $file_data["upfile"]["name"])) {
	            // ファイル移動に失敗
				throw new RuntimeException("ファイル移動に失敗");
			}
    	    // ファイルのパーミッションを確実に0644に設定する
			chmod($file_data["upfile"]["name"], 0644);

			/* メッセージをセット */
			$msgs[] = array(
				'green',
				'Uploaded successfully: ' .
				($_POST['path'] === '' ? '.' : $_POST['path']) .
				'/' .
				$file_data['upfile']['name']
			);

		} catch (RuntimeException $e) {

			$msgs[] = array('red', $e->getMessage());

		}

	}
	var_dump($msgs) ;
}


?>