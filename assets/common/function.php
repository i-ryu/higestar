<?php 

$domain = "http://higesta.com/" ;

function h($str){
	return htmlspecialchars($str) ;
}

function diff($d){
	$post_date = date_create($d);
	$now = date_create(date("Y-m-d H:i:s"));
	$interval = date_diff($post_date, $now);
	$day = (int)$interval->format("%d") ;
	$hour = (int)$interval->format("%h") ;
	$min = (int)$interval->format("%i") ;
	if($day > 2){
		return $d ;
	}
	if($day == 0){
		return $interval->format("%h時間%i分") ;
	}
	if($hour == 0){
		return $interval->format("%i分");			
	}
	if($min == 0){
		return $interval->format("%h分前") ;
	}
	


}

?>