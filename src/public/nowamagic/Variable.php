<?php
$a1 = 10;
$b1 = &$a1;
xdebug_debug_zval('a1');
$a1 = 20;
xdebug_debug_zval('a1');

var_dump($a);


$a2 = 10;
xdebug_debug_zval('a2');
$a2 = $a2;
xdebug_debug_zval('a2');

$a3 = 10;
$b3 = &$a3;
$c3 = $a3;
xdebug_debug_zval('a3');
xdebug_debug_zval('b3');
xdebug_debug_zval('c3');

$a4 = 10;
$c4 = $a4;
xdebug_debug_zval('a4');
xdebug_debug_zval('c4');

$a5 = 10;
$b5 = $a5;
$va5 = 20;
$vb5 = &$va5;
$a5 = $va5;
xdebug_debug_zval('a5');
xdebug_debug_zval('b5');
xdebug_debug_zval('va5');
xdebug_debug_zval('vb5');

