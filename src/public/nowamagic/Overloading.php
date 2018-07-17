<?php

class A
{
    private $data = array();
    function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    function __get($name)
    {
        return $this->data[$name];
    }
    function __isset($name)
    {
        return isset($this->data[$name]);
    }
}

$a = new A();

// 因为 PHP 处理赋值运算的方式，__set() 的返回值将被忽略。类似的, 在下面这样的链式赋值中，__get() 不会被调用：
$c = $a->b = 1;

echo $a->b;

// 在除 isset() 外的其它语言结构中无法使用重载的属性，这意味着当对一个重载的属性使用 empty() 时，重载魔术方法将不会被调用。
// 为避开此限制，必须将重载属性赋值到本地变量再使用 empty()。???????????????????
echo empty($a->b);