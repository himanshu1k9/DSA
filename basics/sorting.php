<?php

############ Bubble sort
$arr = [1, 12,9,13,7,6,8,15,19,17];

function bubbleSort(array &$arr)
{
    $length = count($arr);
    if($length <= 1)
    {
        return $arr;
    }

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

echo "Returning from bubble sort.";
print_r(bubbleSort($arr));

############## Selection sort
function selectionSort(array &$arr)
{
    $length = count($arr);
    if($length <= 1)
    {
        return $arr;
    }

    for($i = 0; $i < $length - 1; $i++)
    {
        $minIndex = $i;
        for($j = $i + 1; $j < $length; $j++)
        {
            if($arr[$j] < $arr[$minIndex])
            {
                $minIndex = $j;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
    }

    return $arr;
}

echo "Returning from Selection sort.";
print_r(selectionSort($arr));

############ Insertion sort
function insertionSort(array &$arr)
{
    $length = count($arr);
    for($i = 1; $i < $length; $i++)
    {
        $key = $arr[$i];
        $j = $i - 1;

        while($j >= 0 && $arr[$j] > $key)
        {
            $arr[$j + 1] = $key;
            $j = $j - 1;
        }

        $arr[$j + 1] = $key;
    }
    return $arr;
}

echo "Prints from insertion sort: ";
print_r(insertionSort($arr));


// problems
// 1. Descending order using bubble sort
function descOrderBubbleSort(array &$arr)
{
    $length = count($arr);
    if($length <= 1)
    {
        return $arr;
    }

    for($i = 0; $i < $length; $i++)
    {
        for($j = 0; $j < $length -$i - 1; $j++)
        {
            if($arr[$j] < $arr[$j + 1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

echo "Form problem 1: ";
print_r(descOrderBubbleSort($arr));


// 2. Check if is sorted or not
function checkSorted(array &$arr)
{
    $length = count($arr);
    if($length <= 1)
    {
        return "Yes";
    }

    for($i = 0; $i < $length - 1; $i++)
    {
        $minIndex = $i;
        for($j = $i + 1; $j < $length; $j++)
        {
            if($arr[$j] < $arr[$minIndex])
            {
                return "No";
            }
        }
    }
    return "Yes";
}

echo "Returning from problem 2. ";
echo checkSorted($arr);