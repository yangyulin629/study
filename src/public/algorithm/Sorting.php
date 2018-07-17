<?php

/**
 * Merge sort two sorted array.
 * @param $arr1
 * @param $arr2
 * @return array
 */
function twoMergeSort($arr1, $arr2)
{
    $r = [];
    $i = 0;
    $j = 0;
    while ($i < count($arr1) && $j < count($arr2)) {
        if ($arr1[$i] < $arr2[$j]) {
            $r[] = $arr1[$i];
            $i++;
        } else {
            $r[] = $arr2[$j];
            $j++;
        }
    }

    if ($i < count($arr1) - 1) {
        $r = array_merge($r, array_slice($arr1, $i));
    }
    if ($j < count($arr2) - 1) {
        $r = array_merge($r, array_slice($arr2, $j));
    }

    return $r;
}


/**
 * Sort a array by merge sorting.
 * @param array $array
 * @param $countInSortedArray
 * @return array
 */
function mergeSort(Array $array, $countInSortedArray)
{
    $arrayCount = count($array);
    $compareCount = ($arrayCount / $countInSortedArray) / 2;
    $retArray = [];

    for ($i = 0; $i < $compareCount; $i++) {
        $arr1 = array_slice($array, $i, $countInSortedArray);
        $arr2 = array_slice($array, $i + $countInSortedArray, $countInSortedArray);
        $sortedArray = twoMergeSort($arr1, $arr2);
        $retArray = array_merge($retArray, $sortedArray);
    }
    $currentCountInSortedArray = $countInSortedArray * 2;
    print_r($retArray);
    if($arrayCount == $countInSortedArray){
        return $retArray;
    }else{
        return mergeSort($retArray, $currentCountInSortedArray);
    }

}

$arr = [45, 53, 18, 36, 72, 30, 48, 93, 15, 36];

$arr1 = [18, 30, 36, 45, 48, 53, 72, 93];
$arr2 = [15, 36];

//print_r(twoMergeSort($arr1, $arr2));

/*print_r(mergeSort($arr, 1));

print_r($_SERVER);*/



function quickSort($arr){
    $first = array_shift($arr);
    $greaterThanFirst = [];
    $lessThanFirst = [];
    foreach ($arr as $item) {
        if ($item > $first) {
            $greaterThanFirst[] = $item;
        } else {
            $lessThanFirst[] = $item;
        }
    }
    count($greaterThanFirst) > 1 ? $after = quickSort($greaterThanFirst) : $after = $greaterThanFirst;
    count($lessThanFirst) > 1 ? $before = quickSort($lessThanFirst) : $before = $lessThanFirst;
    return array_merge($before, [$first], $after);
}

print_r(quickSort($arr));


print_r(json_encode(array('d'=>'1')));