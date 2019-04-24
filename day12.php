<?php 


class Day12
{


	public static function sum($n)
	{
		$sum = $n;
		$sum&&($sum+=self::sum($n-1));
		return $sum;
	}
}

$n = Day12::sum(100);

var_dump($n);


 ?>