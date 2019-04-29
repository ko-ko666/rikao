<?php 


	$a = array(1,3,6,9);
	// var_dump($a);exit;
	$b = array(2,4,5,8,20);
	$c = array_merge($a,$b);
	// var_dump($c);exit;

	sort($c);
	foreach ($c as $key => $val) {
    	echo "$key = $val\n";
	}
	var_dump($c);
	
 ?>