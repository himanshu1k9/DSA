<?php

// 1. Find sum of array using recursion
function findSum(array $arr, int $n): int
{
    if($n === 1)
        return $arr[0];
    if($n === 0)
        return 0;

    $sum = 0;
    $sum += $arr[$n - 1] + findSum($arr, $n - 1);
    return $sum;
}

$numArr = [9];
echo findSum($numArr, count($numArr)) . PHP_EOL;

####### Backtracking introduction
// 2. Example 1: All Possible Subsets (Power Set Problem)
/***
 * 
 * Example 1: Power Set of {1, 2, 3}

    The set {1, 2, 3} has 8 subsets:

    {} (Empty set)

    {1}

    {2}

    {3}

    {1, 2}

    {1, 3}

    {2, 3}

    {1, 2, 3}

    for each element we have 2 choices 
        . nclude the element in the current subset.
        . Exclude the element from the current subset.
 */

        function generateSubsets(array $arr, int $index = 0, array $current = []): void
        {
            if($index === count($arr)) {
                echo "[" . implode(", ", $current) . "]\n";
                return;
            }

            // $currentWith = $current;     
            // $currentWith[] = $arr[$index];               // Including current element
            $current[] = $arr[$index];
            // generateSubsets($arr, $index + 1, $currentWith);
            generateSubsets($arr, $index + 1, $current);

            // excluding currentaly added element
            array_pop($current);
            generateSubsets($arr, $index + 1, $current);
        }

        $superSet = [1,2,3,4];
        generateSubsets($superSet);


    // 2: String Permutations [To check all posible order of a string]
    /**
     *  for abc
     *  abc  
     *  acb  
     *  bac  
     *  bca  
     *  cab  
     *  cba
     * so we can say permutation of a string of length n = n!
     * EX: n = 3 
     *     p = 3! = 3 * 2 * 1 = 6
     */

    function calculatePermutation(string $str, string $prefix = "")
    {
        $n = strlen($str);
        if($n === 0)
        {
            echo $prefix . "\n";
        }

        for($i = 0; $i < $n; $i++)
        {
            $current = $str[$i]; // Taking current character
            $rem = substr($str, 0, $i) . substr($str, $i + 1); // fixing current character.
            calculatePermutation($rem, $prefix . $current);
        }
    }

    $str = "abc";
    calculatePermutation($str);
