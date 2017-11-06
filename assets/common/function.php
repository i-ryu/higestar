<?php 

$domain = "http://higesta.com/" ;

function h($str){
	return htmlspecialchars($str) ;
}

function diff($d){
	$post_date = date_create($d);
	$now = date_create(date("Y-m-d H:i:s"));
	$interval = date_diff($post_date, $now);
	return $interval->format("%d日%h時間%i分%s秒");
}

?>