<?php


echo Sum(2,1);

function Sum($a,$b){
if($b == 0){
   return $a;
}

$sum = $a^$b;

$num = ($a &$b)<<1;

return Sum($sum,$num);
    
}