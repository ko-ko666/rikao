<?php 


function choushu($num){


	if(!$num){
		echo  "请输入一个数";
	}
	if($num%2 ==0){
		$num = $num/2;
		echo "2";
	}
	if($num%3 == 0){
		$num = $num/3;
		echo "3";
	}
	if($num%5 == 0){
		$num = $num/5;
		echo "5";
	}
	if($num == 1){
		echo "这是个丑数";
	}else{
		echo "这不是丑数";
	}
}






choushu(26);
 ?>