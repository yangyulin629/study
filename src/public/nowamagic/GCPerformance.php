<?php
class Foo
{
    public $var = '3.1415962654';
}

for ( $i = 0; $i <= 1000000; $i++ )
{
    $a = new Foo;
    $a->self = $a;
}

echo memory_get_peak_usage(), "/n";

/*
time php -dzend.enable_gc=0 -dmemory_limit=-1 -n GCPerformance.php
440766600/n
real	0m0.171s
user	0m0.122s
sys	0m0.048s
time php -dzend.enable_gc=1 -dmemory_limit=-1 -n GCPerformance.php
4829096/n
real	0m0.220s
user	0m0.218s
sys	0m0.001s
 */