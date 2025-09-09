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

    // 3. Solve “Rat in a Maze” (simple version: can move only down/right).
    /**
     * 
     * 
     * Given a N x N maze (2D grid), where:
     *   1 represents a free/open cell
     *   0 represents a blocked wall
     *   Start at the top-left cell (0,0) and reach the bottom-right cell (N-1,N-1).
     *   Allowed Moves:
     *   Right (i, j+1)
     *   Down (i+1, j)
     * 
     * EX:
     *      $maze = [
     *          [1, 0, 0, 0],
     *          [1, 1, 0, 1],
     *          [0, 1, 0, 0],
     *          [1, 1, 1, 1],
     *        ];
     * 
     * 
     * Expected valid path:
     * 
     *          1 0 0 0  
     *          1 1 0 0  
     *          0 1 0 0  
     *          0 1 1 1  
     * 
     */

    function isSafe(array $maze, int $x, int $y, int $N): bool
    {
        return ($x < $N && $y < $N && $maze[$x][$y] == 1); // either true or false
    }

    function getValidPath(array $maze, int $x, int $y, array &$solution, $N): bool
    {
        if($x == $N - 1 && $y == $N - 1)
        {
            $solution[$x][$y] = 1;
            return true;
        }

        if(isSafe($maze, $x, $y, $N))
        {
            $solution[$x][$y] = 1;
            // move right
            if(getValidPath($maze, $x, $y + 1, $solution, $N))
            {
                return true;
            }

            // move down
            if(getValidPath($maze, $x + 1, $y, $solution, $N))
            {
                return true;
            }

            // backtrack
            $solution[$x][$y] = 0;
            return false;
        }
        return false;
    }

    function solveMaze(array $maze)
    {
        $N = count($maze);
        $solution = array_fill(0, $N, array_fill(0, $N, 0));

        if(!getValidPath($maze, 0, 0, $solution, $N))
        {
            echo "No Path Found. \n";
            return;
        }

        echo "Path found: \n";
        for($i = 0; $i < $N; $i++) 
        {
            for($j = 0; $j < $N; $j++)
            {
                echo $solution[$i][$j] . " ";

            }
             echo "\n";
        }
    }

    $maze = [
        [1, 0, 0, 0],
        [1, 1, 0, 1],
        [0, 1, 0, 0],
        [1, 1, 1, 1],
    ];

solveMaze($maze);
