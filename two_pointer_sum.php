<?php

$numbers = [1,3,5,7,8,9];
$target = 4;

$start = 0;
$end = count($numbers) -1 ;
while($start < $end){
	$sum = $numbers[$start] + $numbers[$end] ;
	if($sum == $target ){
		echo("Target Found". $numbers[$start] ."   &   ". $numbers[$end]);
		break;
	}elseif($sum < $target){
		$start++;
	}
	else{
		$end--;
	}
}


