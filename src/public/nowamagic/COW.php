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


$x = ['life', 'work', 3];
$z = ['life', 'work', 4];
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

$a = array( 'meaning' => 'life', 'number' => 42 );
$a['life'] = $a['meaning'];
xdebug_debug_zval( 'a' );
unset( $a['meaning'], $a['number'] );
xdebug_debug_zval( 'a' );