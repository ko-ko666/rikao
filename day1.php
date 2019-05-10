<?php 


$str = 'Have you ever gone shopping and';
$arr = [];

for ($i=0; $i <strlen($str); $i++) { 
	if(array_key_exists($str[$i], $arr)){
		$arr[$str[$i]]+=1;
		if($arr[$str[$i]] == 3){
			echo $arr[$str[$i]];
			break;
		}
	}else{
		echo $arr[$str[$i]];
	}
}


 ?>