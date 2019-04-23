<?php 


$s = "student a am I";

$s1 = explode(' ',$s);

$s2 = array_reverse($s1);


$s3 = implode(' ', $s2);

print($s3);



 ?>