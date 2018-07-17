<?php
/*$baseMemory = memory_get_usage();

$array= range(0, 800000);

echo sprintf( '%8d: ', $i ), memory_get_usage() - $baseMemory, "<br>";
//$ref=& $array;
var_dump(count($array));
echo sprintf( '%8d: ', $i ), memory_get_usage() - $baseMemory, "<br>";*/


/* Results in PHP 7.2

0: 33558608
/var/www/public/Reference.php:8:int 800001
0: 33558608

Results in PHP 5.6
0: 117189184
/var/www/public/Reference.php:8:int 800001
0: 117189184
看见没，PHP7.2节约了很多内存，那是因为PHP7.2中对于这种long型的zval直接保存了它的值。而PHP5.6保存的是一个指针指向一个long型的value。
如果取消reference这句话的注释的话，PHP5.6会报错。因为count是传值调用，需要copy一份新的。
*/

$baseMemory = memory_get_usage();

$array= array_map(function($n) { return sprintf('sample_%03d', $n); }, range(0, 200000));

echo sprintf( '%8d: ', $i ), memory_get_usage() - $baseMemory, "<br>";
$ref=& $array;
var_dump(count($array));
echo sprintf( '%8d: ', $i ), memory_get_usage() - $baseMemory, "<br>";

/* Results without reference in PHP 7.2
0: 72393104
/var/www/public/Reference.php:31:int 200001
0: 72393104

Results without reference in PHP 5.6
0: 80497952
/var/www/public/Reference.php:31:int 200001
0: 80497952
看见没，PHP7.2和PHP5.6差不多。

Results without reference in PHP 7.2
0: 72393104
/var/www/public/Reference.php:31:int 200001
0: 72393128

Results without reference in PHP 5.6
0: 80497928
/var/www/public/Reference.php:31:int 200001
0: 80498016
注意看，不管是PHP7.2还是PHP5.6，前后的值都发生了变化。应该是多了一个变量导致的。
*/


$foo ['love'] = 1;
$foo ['love2'] = 2;
xdebug_debug_zval('foo');
$bar  = &$foo['love'];
$tipi = $foo;
xdebug_debug_zval('foo');
xdebug_debug_zval('tipi');
$tipi['love'] = '2';
$tipi['love2'] = '3';
echo $foo['love'];
xdebug_debug_zval('foo');
xdebug_debug_zval('tipi');

$ca = 10;
$cb = &$ca;
xdebug_debug_zval('ca');
$db = $ca;
xdebug_debug_zval('db');
$db = 12;
xdebug_debug_zval('ca');
xdebug_debug_zval('cb');
xdebug_debug_zval('db');


$za['love'] = 10;
$zb = $za;
$zb['love2'] = 12;
xdebug_debug_zval('za');
xdebug_debug_zval('zb');

class ClassA
{
    public $a;
}

$xa = new ClassA();
$xa->a = 'a';
$xb = $xa;
$xb->a = 'b';
xdebug_debug_zval('xa');
xdebug_debug_zval('xb');
