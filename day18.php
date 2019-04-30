<?php 


function NumberOf1($n){
	$r = 0;
	while($n !=0){
		$r++;
		$n &=($n-1);
	}
	return $r;
}
echo NumberOf1(10);





 ?>