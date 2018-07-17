<?php
$a = ['a', 'b', 'c'];
echo current($a);
echo end($a);
echo current($a);
echo prev($a);
echo reset($a);
echo next($a);
print_r(each($a));
print_r(each($a));
print_r(each($a));
echo reset($a);
echo key($a);




$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2);
array_multisort($ar1, SORT_DESC, $ar2, SORT_DESC);

var_dump($ar1);
var_dump($ar2);