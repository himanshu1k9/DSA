<?php

// 1. Two Sum (Brute): Read n, array, and target T. Check if any pair sums to T (print indices or NO). Try O(n²)
echo "Enter number of elements: ";
$n = (int) trim(readline());
$numArr = [];

echo "Enter the taget sum ";
$target = (int) trim(readline());
echo $target;
for($i = 0; $i < $n; $i++)
{
    echo "Enter the " . $i + 1 . " number: ";
    $element = (int) trim(readline());

    array_push($numArr, $element);
}

// print_r($numArr);

function twoSum($numArr, $target)
{
    $length = count($numArr);
    if($length <= 1)
    {
        return [];
    }

    for($i = 0; $i < $length - 1; $i++)
    {
        for($j = $i + 1; $j < $length; $j++)
        {
            if($numArr[$i] + $numArr[$j] === $target)
            {
                return [$i, $j];
            } else {
                break; // due to this prints consecutive indexes if removes this else it will return non consecutive indexes
            }
        }
    }
    return [];
}

$resultAr = twoSum($numArr, $target);
print_r($resultAr);


// 2. Rotate Array by k (left rotation) — do it using reverse‑segments method.
echo "Enter the kth element: ";
$k = (int) trim(readline());
echo "Enter the numbver of elements: ";
$n = (int)trim(readline());

$arrNum = [];
for($i = 0; $i < $n; $i++)
{
    echo "Enter the " . $i + 1 . " number: ";
    $num = (int)trim(readline());
    array_push($arrNum, $num);
}

function leftRotateByK(array &$arrNum, int $k, int $n)
{
    $k = $k % $n;

    if ($k === 0) {
        return;
    }

    reverse($arrNum, $start = 0, $end = $k - 1);
    reverse($arrNum, $start = $k, $end = $n - 1);
    reverse($arrNum, $start = 0, $end = $n - 1);
}

######## Function to rotate to right
function rightRotateByK(array &$arrNum, int $k, int $n)
{
    $k = $k % $n;
    if($k == 0)
    {
        return;
    }

    reverse($arrNum, $start = 0, $end = $n - 1);
    reverse($arrNum, $start = 0, $end = $k - 1);
    reverse($arrNum, $start = $k, $end = $n - 1);
}

function reverse(array &$arr, int $start, int $end)
{
    while($start < $end)
    {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
}

function printLeftKthRotatedArray($arr)
{
    foreach($arr as $ele)
    {
        echo $ele . " ";
    }
}

###### Calling an printing left rotate
// leftRotateByK($arrNum, $k, $n);
// printLeftKthRotatedArray($arrNum);


##### Calling an dprinting Right rotate
rightRotateByK($arrNum, $k, $n);
printLeftKthRotatedArray($arrNum);


// 3. Longest Word: Given a sentence, print the longest word (ties: first one).
echo "Enter the sentence: ";
$line = trim(readline());

function printLongestWord(string $line)
{
    $lineArr = explode(" ", $line);
    $length = count($lineArr);

    if($length == 0)
    {
        return null;
    }

    $longestWord = '';
    if($length == 1)
    {
        $longestWord = $lineArr[0];
    }

    $largestWordLength = 0;
    $largestWord = null;
    foreach($lineArr as $word)
    {
        if(strlen($word) > $largestWordLength)
        {
            $largestWordLength = strlen($word);
            $largestWord = $word;
        }
    }
    return $largestWord;
}

$resultLargestWord = printLongestWord($line);
echo "Largest Word: " . $resultLargestWord . PHP_EOL;