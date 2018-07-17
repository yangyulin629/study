<?php
/*new A();

class A extends B{}

class B{}*/

/*
 * line     #* E I O op                           fetch          ext  return  operands
-------------------------------------------------------------------------------------
   2     0  E >   NEW                                              $0      :-5 报错了
         1        DO_FCALL                                      0
         2        FREE                                                     $0
   4     3        FETCH_CLASS                                   0  :2      'B'
         4        DECLARE_INHERITED_CLASS                          $3      'a', $2
   6     5        NOP
         6      > RETURN                                                   1
实际执行顺序： 4->1->2->3->5->6
 */

class A extends B{}
class B{}
new A();