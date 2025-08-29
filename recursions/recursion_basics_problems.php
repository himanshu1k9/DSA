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

// 4. Find fibonacci series.
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

// 7. Write a recursive function to calculate power: X^n
function calculatePower(int $x, int $n)
{
    if($n == 1) {
        return $x;
    }

    if($n == 0) {
        return 1;
    }

    if($x <= 1)
    {
        return $x;
    }

    $power = $x * calculatePower($x, $n - 1);
    return $power;
}

echo calculatePower(1, 100) . PHP_EOL;

// 8. Write a recursive function to find the maximum element in an array.
function findMaxEle(array &$arr, int $idx = 0, $currMax = null)
{
    $length = count($arr);
    if($idx === $length)
        return $currMax;

    if($currMax === null)
        $currMax = $arr[$idx];

    if($arr[$idx] > $currMax)
        $currMax = $arr[$idx];

    return findMaxEle($arr, $idx + 1, $currMax);
}

$findMaxArr = [1,2,3,4,5,6,7,8,9];

echo findMaxEle($findMaxArr) . PHP_EOL;

// 9. Write a recursive function to check if a string is palindrome.
function checkPalindrome(string $str, int $start = 0, int $end = null): bool
{
    if($end === null)
    {
        $end = strlen($str) - 1;
    }

    if($start >= $end)
    {
        return true;
    }

    if($str[$start] !== $str[$end])
    {
        return false;
    }

    return checkPalindrome($str, $start + 1, $end - 1);
}

$palindromeStr = 'abcdcbc';
echo checkPalindrome($palindromeStr) . PHP_EOL;