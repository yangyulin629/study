<?php
$arr = array(
    array("id" => 1, "pid" => 0, 'cat' => '栏目一'),
    array("id" => 2, "pid" => 0, 'cat' => '栏目二'),
    array("id" => 3, "pid" => 1, 'cat' => '栏目三'),
    array("id" => 4, "pid" => 2, 'cat' => '栏目四'),
    array("id" => 5, "pid" => 1, 'cat' => '栏目五'),
    array("id" => 6, "pid" => 5, 'cat' => '栏目六'),
    array("id" => 7, "pid" => 5, 'cat' => '栏目七'),
    array("id" => 8, "pid" => 6, 'cat' => '栏目八'),
    array("id" => 9, "pid" => 1, 'cat' => '栏目九'),
    array("id" => 10, "pid" => 0, 'cat' => '栏目十'),
    array("id" => 11, "pid" => 10, 'cat' => '栏目十一'),
    array("id" => 12, "pid" => 11, 'cat' => '栏目十二'),
    array("id" => 13, "pid" => 2, 'cat' => '栏目十三'),
    array("id" => 14, "pid" => 13, 'cat' => '栏目十四')
);


function makeTree(Array $arr, $root)
{
    $ret = [];
    foreach ($arr as $item) {
        if ($item['pid'] == $root) {
            $cats = makeTree($arr, $item['id']);
            if ($cats) {
                $item['cats'] = $cats;
            }
            $ret[] = $item;
        }
    }
    return $ret;
}

/*echo "<pre>";
print_r(makeTree($arr, 0));
echo "</pre>";*/

function makeTreeO(Array $arr){
    $ret = [];
    $ref = [];
    foreach ($arr as $key => $value) {
        $ref[$value['id']] = & $arr[$key];
    }

    foreach ($ref as $key => $value) {
        if (array_key_exists($value['pid'],$ref)) {
            $ref[$value['pid']]['cats'][] = & $ref[$key];
        } else {
            $ret[] = &$ref[$key];
        }
    }
    return $ret;
}

echo "<pre>";
print_r(makeTreeO($arr));
echo "</pre>";

function makeTreeO2(Array $arr){
    $ret = [];
    $arr = array_combine(array_column($arr, 'id'), $arr);
    foreach ($arr as $key => $item) {
        if (array_key_exists($item['pid'],$arr)) {
            $arr[$item['pid']]['cats'][] = &$arr[$key]; //注意這個地方直接用$item不行。原因是$item是一个zval结构，循环它指向这些zend_array；而不是原来的那些$arr上的zval；
        } else {
            $ret[] = &$arr[$key];
        }
    }
    return $ret;
}
echo "<pre>";
print_r(makeTreeO2($arr));
echo "</pre>";
/*function funA()
{
    $cloures = [];
    $a = 'a';
    for ($i = 0; $i < 5; $i++) {
        $cloures[] = function () use ($a, $i) {
            echo $a . $i;
        };
    }
    return $cloures;
}


foreach (funA() as $item) {
    $item();
}*/