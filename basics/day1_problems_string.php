<?php

// 1. Read a line; print length, first char, last char.

$line = trim(fgets(STDIN)); // fgetc() just reads one character

$length = strlen($line);
$firstChar = $length > 0 ? $line[0] : '';
$lastChar = $length > 0 ? $line[$length - 1] : '';

echo "Length of string: " . $length . "\n";
echo "first Char: " . $firstChar . "\n";
echo "Last Char: " . $lastChar . "\n";

// 2. Palindrome Check — Case‑insensitive, ignore non‑alphanumerics.
echo "Enter the String: ";
$str = trim(fgets(STDIN));
$length = strlen($str);

function checkPalindrome($str, $length)
{
    if($length === 1 && $length === 2)
    {
        return "Yes";
    }

    $newLen = 0;
    if($length % 2 == 0) {
        $newLen = ( $length / 2 ) - 1;
    } else {
        $newLen = $length / 2;
    }

    $start = 0;
    $end = $length - 1;

    while($start <= $newLen && $start <= $end)
    {
        if($str[$start] !== $str[$end])
        {
            return "No";
        }

        $start++;
        $end--;
    }

    return "Yes";
}

echo "Is palindrome: " . checkPalindrome($str, $length) . "\n";