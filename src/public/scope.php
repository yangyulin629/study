<?php
const C = "F";


function funA()
{
    global $a;
    static $b;
    $a++;
    $b++;
    echo $b;
    echo C;
}

function funB()
{
    global $a;
    static $b;
    $a++;
    $b++;
    echo $b;
}
class ClassA{
    const C = 3;
    const D = 4;
    function funA(){
        echo C;
        echo ClassA::C;
        echo ClassA::D;
    }
}

funA();
funA();
funB();
echo $a;
echo $b;
echo C;
echo (new ClassA())->funA();