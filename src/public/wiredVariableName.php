<?php
//$111= "nowamagic";

/*$a = 111;
$$a = "nowamagic"; //以变量$a的值作为变量名
echo $$a;

var_dump($GLOBALS);*/




class Person
{
    protected $_name = "phper";

    protected $_age  = 18;

    public function getName()
    {
        // $this = 3;
        $a = "this";
        $$a = 123; // PHP message: PHP Fatal error:  Uncaught Error: Cannot re-assign $this in PHP 7.2
        $b = 123;
        echo $this;
        echo $b;
        echo $this->getAge();
        echo $b->getAge(); // Call to a member function getAge() on integer
        return $this->_name;
    }

    public function getAge()
    {
        return $this->_age;
    }
}


$p = new Person();
echo $p->getName();

