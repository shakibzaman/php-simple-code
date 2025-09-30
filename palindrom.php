<?php 

$string = 'naan';

$left = 0;
$right = strlen($string) -1 ;
$isPalindrom = true;

while($left < $right){
	if($string[$left] != $string[$right]){
		$isPalindrom = false;
	}
	$left ++;
	$right --;
}

echo $isPalindrom?"Palindrom":"Not Palindrom";
