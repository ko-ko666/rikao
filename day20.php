<?php 


$x = 1;
$y = 2;
function status CountSteps($x,$y){

	for ($i=0; $i <=1 ; $i++) { 
		if($x=2){
			echo "恭喜";
		}
	}
	for ($i=0; $i <=2 ; $i++) { 
		if($x>2){
			echo "恭喜";
		}
	}

	if($x==1 || $y==1){
		echo "到达终点";
		return $x = $y;

	}
}


 ?>