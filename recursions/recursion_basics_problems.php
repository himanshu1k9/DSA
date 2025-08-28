<?php

// 1. find factorial
function findFactorial($n)
{
    if($n <= 1)
    {
        return 1;
    }

    $fact = $n * findFactorial($n - 1);
    return $fact;
}

echo findFactorial(5) . PHP_EOL;
echo findFactorial(6) . PHP_EOL;

// 2. Sum of first n natural numbers
function findSumOfN($n)
{
    if($n <= 1)
    {
        return 1;
    }

    $sum = 0;
    $sum = $n + findSumOfN($n - 1);
    return $sum;
}

echo findSumOfN(5). PHP_EOL;

// 3. Reverse a string
function reverseStr($str)
{
    if(strlen($str) <= 1)
    {
        return $str;
    }

    $revStr = reverseStr(substr($str, 1)) . $str[0];
    return $revStr;
}

echo reverseStr('Himanshu'). PHP_EOL;

// 4. Find fibonacci number at position N.
function findFibbonaciRecursive($n, $series = [0,1])
{
    if (count($series) >= $n) {
        return array_slice($series, 0, $n);
    }

    $series[] = $series[count($series) - 1] + $series[count($series) - 2];
    return findFibbonaciRecursive($n, $series);
}

print_r(findFibbonaciRecursive(5));

// 5 Find GCD (Greatest Common Divisor) using recursion.

/******
 * Using Euclidean Algorithm
 */
function findGCD(int $a, int $b)
{
    if($b == 0)
    {
        return $a;
    }

    return findGCD($b, $a % $b);
}

echo findGCD(98, 56) . PHP_EOL;
echo findGCD(48, 84) . PHP_EOL;

// 6. Count digits in a number using recursion.
function countDigits($num)
{
    if($num == 0)
        return 0;

    return 1 + countDigits((int) ($num / 10));
}

echo countDigits(1234567) . PHP_EOL;