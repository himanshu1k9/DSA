<?php
# 1. Max & Min — Read n and n integers; print max min.


##### Taking arrsy length
$n = (int)trim(readline("Enter number of elements: "));
if(gettype($n) !== 'integer') {
    echo "Enter a valid number of elements. \n";
    exit;
}

$numArr = [];

######### taking array elements in integer.
for($i = 0; $i < $n; $i++) {
    $num = (int)trim(readline("Enter number ". ( $i + 1 ) .": " ));
    if(gettype($num) !== 'integer')
    {
        echo "Enter a valid number. \n";
        exit;
    }

    array_push($numArr, $num);
}


function findMax($numArr)
{
    if(count($numArr) == 1)
    {
        return $numArr[0];
    }

    if(count($numArr) < 1) 
    {
        return null;
    }
    
    $maxNum = PHP_INT_MIN;
    $start = 0;
    $end = count($numArr) - 1;

    while($start <= $end)
    {
        if($numArr[$start] > $maxNum)
        {
            $maxNum = $numArr[$start];
        }

        if($numArr[$end] > $maxNum)
        {
            $maxNum = $numArr[$end];
        }
        $start++;
        $end--;
    }
    return $maxNum;
}

echo "MAX " . findMax($numArr) . PHP_EOL;

function findMin($numArr)
{
    if(count($numArr) == 1)
    {
        return $numArr[0];
    }

    if(count($numArr) < 1)
    {
        return null;
    }

    $minNum = PHP_INT_MAX;
    $start = 0;
    $end = count($numArr) - 1;
    while($start <= $end)
    {
        if($numArr[$start] < $minNum)
        {
            $minNum = $numArr[$start];
        }

        if($numArr[$end] < $minNum)
        {
            $minNum = $numArr[$end];
        }

        $start++;
        $end--;
    }

    return $minNum;
}

echo "MIN " . findMin($numArr) . PHP_EOL;

// 2. Count Evens & Odds — Print evens odds counts.
function countEvenOdd($numArr)
{
    if(count($numArr) < 1)
    {
        return null;
    }

    $evenCount = 0;
    $oddCount = 0;

    $start = 0;
    $end = count($numArr) - 1;

    while($start < $end)
    {
        if($numArr[$start] % 2 == 0)
        {
            $evenCount++;
        } else {
            $oddCount++;
        }

        if($start != $end)
        {
            if($numArr[$end] % 2 == 0)
            {
                $evenCount++;
            } else {
                $oddCount++;
            }
        }

        $start++;
        $end--;
    }

    return [$evenCount, $oddCount];
}

$evenOddResult = countEvenOdd($numArr);
echo "Even Count " . ( $evenOddResult[0] ?? null ) . " Odd count " . ( $evenOddResult[1] ?? null ) . " \n";


// 3. Reverse Array (in‑place) — Reverse and print in one line.

function reverseArr($numArr)
{
    if(count($numArr) == 1)
    {
        return $numArr;
    }

    if(count($numArr) < 1)
    {
        return [];
    }

    $revArr = [];
    for($i = count($numArr) - 1; $i >= 0; $i--)
    {
        $revArr[] = $numArr[$i];
    }

    return $revArr;
}

$reverseArray = reverseArr($numArr);

function printReverseArr($reverseArray)
{
    if(count($reverseArray) >= 1)
    {
        for($i = 0; $i < count($reverseArray); $i++)
        {
            echo  $reverseArray[$i] . " ";
        }
    }
}

printReverseArr($reverseArray);

// 4. Second Largest — If not present, print NA.
function printSecondLargest($numArr)
{
    if(count($numArr) <= 1)
    {
        return "N/A";
    }

    $firstLargest = PHP_INT_MIN;
    $secondLargest = PHP_INT_MIN;

    $start = 0;
    $end = count($numArr) - 1;

    while($start <= $end)
    {
        if($numArr[$start] > $firstLargest)
        {
            $secondLargest = $firstLargest;
            $firstLargest = $numArr[$start];
        }

        if($numArr[$end] > $firstLargest)
        {
            $secondLargest = $firstLargest;
            $firstLargest = $numArr[$end];
        }

        if($numArr[$start] > $secondLargest && $numArr[$start] < $firstLargest)
        {
            $secondLargest = $numArr[$start];
        }

        if($numArr[$end] > $secondLargest && $numArr[$end] < $firstLargest)
        {
            $secondLargest = $numArr[$end];
        }

        $start++;
        $end--;
    }

    return $secondLargest;
}

echo "Second largest value is: " . printSecondLargest($numArr) . " \n";

// 5. Is Sorted (non‑decreasing) — Print YES or NO.
function isSorted($numArr)
{
    if(count($numArr) == 1)
    {
        return "Yes";
    }

    if(count($numArr) < 1)
    {
        return null;
    }

    for($i = 0; $i < count($numArr) - 1; $i++)
    {
        if($numArr[$i] > $numArr[$i + 1])
        {
            return "No";
        }
    }

    return "Yes";
}

$resultIsSorted = isSorted($numArr);
echo "Is Sorted in Ascending: " . $resultIsSorted . "\n";

// 6. Sum of Prefixes — Given array, print running sums.
function sumOfPrefixes($numArr)
{
    if(count($numArr) < 1)
    {
        return null;
    }

    $sum = 0;
    $prefixSumArr = [];

    foreach($numArr as $num)
    {
        $sum += $num;
        $prefixSumArr[] = $sum;
    }

    return $prefixSumArr;
}

$resultPrefixArray = sumOfPrefixes($numArr);
foreach($resultPrefixArray as $num)
{
    echo $num . " ";
}