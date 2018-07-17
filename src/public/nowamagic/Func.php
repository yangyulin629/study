<?php
$func = 'print_r';
$func('i am print_r function.');

print_r('i am print_r function.');

$a = 'a';
$A = 'A';
echo $a;
echo $A;
var_dump($a, $A);
function funA($a, $A){
    echo $a;
    echo $A;
}
funA('a', "A");
/*
 -------------------------------------------------------------------------------------
   2     0  E >   ASSIGN                                                   !0, 'print_r'
   3     1        INIT_DYNAMIC_CALL                                        !0
         2        SEND_VAL_EX                                              'i+am+print_r+function.'
         3        DO_FCALL                                      0
   5     4        INIT_FCALL                                               'print_r'
         5        SEND_VAL                                                 'i+am+print_r+function.'
         6        DO_ICALL
         7      > RETURN
 */

/*class A
{

}

class a
{

}
[error] 5#5: *18 FastCGI sent in stderr: "PHP message: PHP Fatal error:  Cannot declare class a, because the name is already in use in /var/www/public/Func.php on line 24
*/
/*function T()
{
    echo 1;
}
function t()
{
    echo 2;
}
[error] 5#5: *16 FastCGI sent in stderr: "PHP message: PHP Fatal error:  Cannot redeclare t()
(previously declared in /var/www/public/Func.php:28) in /var/www/public/Func.php on line 35" while reading response header from upstream,
client: 192.168.1.66, server: fpm72.com, request: "GET /Func.php HTTP/1.1", upstream: "fastcgi://172.20.0.2:9000", host: "192.168.1.9:8072"
*/
