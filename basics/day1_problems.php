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

