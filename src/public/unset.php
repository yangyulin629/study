<?php
$baseMemory = memory_get_usage();

$str = 10;

echo memory_get_usage() - $baseMemory, "<br>";
unset($str);
echo memory_get_usage() - $baseMemory, "<br>";



