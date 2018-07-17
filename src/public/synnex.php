<?php
// 1. What are the types of join and explain each?
/*
 Joins are of two types:

1. Inner Join  – Matching column is given based on which joining the two tables occurs. all the rows which have a matching value of the column selected will be extracted. This is just like Intersection in sets. First find out all the matching values for the column selected for inner join, then return all the rows for this matching values.

2. Outer Join – Outer join is again divided into 3 types:

i Left Outer Join
ii Right Outer Join
iii Full Outer Join

In Left Outer join, unmatched column values for the first table are also extracted.

In right outer join, unmatched column values for the second table and matched column values for both the tables are extracted.

In full join, all the columns irrespective of matches are extracted.
 */
/*
 2. How to debug online PHP server?
 3. Which are the fastest character concat?
 4. What are the difference between InnoDB and MyISAM?
 5. Array function?
 6. Sort function? sort, rsort, usort, asort, uasort, array_multisort.
 7. HTTP Status Code?401, 403, 500, 503, 301, 302.
 8. Difference between truncate and delete.
 9. What are the types of index?
10. If PHP support multi-inheritance?
11. How to pass an array with URL? http_build_query($array) or urlencode(serialize($array))
12. setcookie()?
13. error_reporting(-1); report all errors
*/

var_dump(01234 == 1234);
var_dump('01234' == 1234);
var_dump('01234' === 1234);

$a = 01234; // 八进制
$a = 0x1234;
$b = 1234;
var_dump($a == $b);

var_dump($a);

xdebug_debug_zval('a');
xdebug_debug_zval('b');


$c = 'david';
$c[11] = 'yang';
echo $c;
echo strlen($c);

echo '<br>';

$d = 1;
$f = &$d;
$f = "2$f";

echo $d;
echo $f;
