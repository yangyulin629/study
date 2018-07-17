<?php
echo 'used ' . xdebug_memory_usage() . '<br>';
$arr = range(1, 100000);
echo 'used ' . xdebug_memory_usage() . '<br>';
$s = microtime(true);
for ($i = 0; $i <= 100; $i++) {
    count($arr);
}
echo 'used ' . xdebug_memory_usage() . '<br>';
echo 'consuming time: ' . (microtime(true) - $s) * 100 . 'ms' . '<br>';

$arr = range(1, 100000);
echo 'used ' . xdebug_memory_usage() . '<br>';
$arr2 = &$arr;
echo 'used ' . xdebug_memory_usage() . '<br>';
$s = microtime(true);
// $arr3 = $arr;
for ($i = 0; $i <= 100; $i++) {
    count($arr); // The function count only accept calling by value, I doubt it will copy the $arr on at the beginning and unset it in the end.
    echo 'used ' . xdebug_memory_usage() . '<br>';
}
echo 'used ' . xdebug_memory_usage() . '<br>';
echo 'consuming time: ' . (microtime(true) - $s) * 100 . 'ms';