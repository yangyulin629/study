<?php
class A {
    public static function call()
    {
        echo "class A" . "<br>";
    }

    public static function test()
    {
        self::call();
        static::call();
    }
}

class B extends A {
    public static function call()
    {
        echo "class B" . "<br>";
    }
}

B::test();


class C {
    public function call()
    {
        echo "class C" . "<br>";
    }

    public function test()
    {
        self::call();
        static::call();
    }
}

class D extends C {
    public function call()
    {
        echo "class D" . "<br>";
    }
}
$d = new D();
$d->test();


