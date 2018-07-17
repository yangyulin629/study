<?php
// declare(strict_types=1); //如果是严格模式，返回的值类型不对或者传入的值类型不对会报错。

/*function sum(int ...$ints){
    return array_sum($ints);
}

print_r(sum(2, '3', 4.1));*/


/*function returnIntValue(int $value) : int
{
    return $value;
}

print_r(returnIntValue(5));*/


declare(strict_types = 1); // 对于标量类型声明：在严格模式下，有一种例外的情况是：当函数参数为float时，传入int型变量不会跑出typeerror，而是正常执行，在返回类型声明中，也是同样的:
function test (float $inter) {
    return $inter;
}

echo test(2); // 结果为2

function test1(int $inte) : float{
    return $inte;
}
echo test1(1); // 结果为1