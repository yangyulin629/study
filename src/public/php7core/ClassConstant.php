<?php
/*echo MyClass::A1;

class MyClass {
    const A1 = "hi";
}

class MyClass2 {
    const A1 = "hi";
}

echo MyClass2::A1;*/

class User {
    const TYPE = 110;

    static $name = "uuu";
    public $uid = 900;

    public function getName()
    {
        $a = 1;
        return $this->uid;
    }
}

class MyUser extends User {

    public function getName()
    {
        $a = 2;
        return 2;
    }

}