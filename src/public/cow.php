<?php
$a = "Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!";

$b = $a;
$i = $b;
$f = &$a;
$g = "Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!Hello Now a Magic!";
xdebug_debug_zval('a');
xdebug_debug_zval('b');
xdebug_debug_zval('f');
xdebug_debug_zval('g');
xdebug_debug_zval('i');
$c = 10;
$d = $c;
$e = 10;
xdebug_debug_zval('c');
xdebug_debug_zval('d');
xdebug_debug_zval('e');


$x = ['1', '2'];
$y = $x;
// echo count($y);
echo '<br>';
debug_zval_dump($x);
echo '<br>';
debug_zval_dump($y);
xdebug_debug_zval('x');
xdebug_debug_zval('y');
unset($y);
xdebug_debug_zval('x');
xdebug_debug_zval('y');

debug_zval_dump($x);