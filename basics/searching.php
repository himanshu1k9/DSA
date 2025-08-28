<?php

######### Binary Search [Needs sorted array];
$arr = [12,9,13,14,19,15,8,6,18];

function sortArrInAscending(array &$arr)
{
    $length = count($arr);
    if($length <= 1) return $arr;

    for($i = 0; $i < $length; $i++)
    {
        for($j = 0; $j < $length - $i - 1; $j++)
        {
            if($arr[$j] > $arr[$j + 1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

$sortedArr = sortArrInAscending($arr);
echo "sorted array: ";
print_r($sortedArr);
$searchFor = 18; //$sortedArr[4];

function binarySearch(array &$sortedArr, int $searchFor)
{
    $length = count($sortedArr);
    $start = 0;
    $end = $length - 1;

    while($start <= $end)
    {
        $mid = (int) (($start + $end) / 2);
        if($sortedArr[$mid] == $searchFor) return $mid;
        elseif($sortedArr[$mid] < $searchFor) $start = $mid + 1;
        else $end = $mid - 1;
    }
    return -1;
}

echo "Result of Binary search: ";
echo binarySearch($sortedArr, $searchFor);