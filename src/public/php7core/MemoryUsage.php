<?php
$baseMemory = memory_get_usage();
$a = 'hi';
echo memory_get_usage() - $baseMemory . '<br>';
unset($a);
echo memory_get_usage() - $baseMemory . '<br>';
$b = 'hi' . time();
echo memory_get_usage() - $baseMemory . '<br>';
unset($b);
echo memory_get_usage() - $baseMemory . '<br>';

/*Result in PHP7.2
0
0
40
0
Result in PHP5.6
272
136
304
136
*/