<?php 

	$num = num(1,13);

	var_dump($num);

	function num($n,$m){
		$arr = range($n,$m);
		$num = 0;

		foreach ($arr as $k => $v) {
			if($v%10 == 1){
				$num ++;
			}

			if(floor($v%10)==1){
				$num ++;
			}
		}
		return $num;
	}

 ?>