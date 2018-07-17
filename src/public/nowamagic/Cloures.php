<?php

/*function funA(){
    $a = 'a';
    $closures = [];
    for ($i = 1; $i <= 5; $i++) {
        $closures[] = function () use($a, $i) {
            echo $a . $i;
        };
    }

    $a = 'b';
    return $closures;
}

foreach (funA() as $itemClosure) {
    $itemClosure();
}


class Example {
    public $x = 4;
    function printer () { echo "Hello World: $this->x!\n"; }
}


$class = new ReflectionClass ('Example');
$method = $class->getMethod ('printer');

$object = new Example;
$closure = $method->getClosure ($object);
$closure ();
$object->x = 5;
$closure ();*/

//print_r($_SERVER);

//echo phpinfo();

class C
{
    public $p;
    function __construct($arg)
    {
        $this->p = $arg;
    }
}

//$a = [new C('a'), new C('b')];
$a = ['a' => 'a', 'b' => 'b'];

function f(&$a)
{
    foreach ($a as $key => $item){
        $a[$key] = '1';
    }

}
f($a);
var_dump($a);
?>
<script>
/*    function funA(){
        var a = 'a';
        var $closures = [];
        for(var i = 1; i <= 5; i++){
            var funTmp = function(){
                var aa = a;
                var ii = i;
                return function() {alert( aa + ii) };
            }
            $closures.push(funTmp())
        }
        a = 'b';
        return $closures;
    }
    funA().forEach(function(itemClosure){
        itemClosure();
    })*/

/*    var actions = new Array();
    for (var v = 0; v < 5; v++){
        actions.push(function(){alert(v)});
    }
    for (var j=0; j < 5; j++){
        actions[j]();
    }*/
</script>