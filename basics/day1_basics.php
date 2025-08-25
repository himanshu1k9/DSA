<?php
# Variables in PHP

$int = 10;
$float = 10.20;
$string = 'Himanshu Vaidya';
$bool = true;

echo $int . PHP_EOL;
echo $float . PHP_EOL;
echo $bool ?? false . PHP_EOL;
echo $string . PHP_EOL;

# if else
// echo gettype($float); // getting type of data
if(gettype($int) === 'integer')
{
    echo "An Integer.\n";
}

if(gettype($float) == 'double') {
    echo "A Float value. \n";
}

// echo gettype($string); -- string
if(gettype($string) === 'string') {
    echo "A String Value. \n";
}

// echo gettype($bool); -- boolean
if(gettype($bool) === 'boolean') {
    echo "A Boolean value. \n";
}

##### if else and switches
$gradeArr = ['A', 'B', 'C', 'D', 'E'];
foreach($gradeArr as $key => $grade)
{
    if($grade == 'A') {
        echo "Passed with grade A. \n";
    } else if($grade == 'B') {
        echo "Passed with Grade B. \n";
    } else if($grade == 'C') {
        echo "Passed with grade C. \n";
    } else if($grade == 'D') {
        echo "Passed with Grade D. \n";
    } else if($grade == 'E') {
        echo "Passed with grade E. \n";
    }
}

foreach($gradeArr as $key => $grade) {
    switch ($grade) {
        case 'A':
            echo "Grade A. \n";
            break;
        case 'B':
            echo "Grade B. \n";
            break;
        case 'C':
            echo "Grade C. \n";
            break;
        case 'D':
            echo "Grade D. \n";
            break;
        case 'E':
            echo "Grade E. \n";
            break;
        default:
            echo "Failed. \n";
            break;
    }
}


####### Loops in PHP
// 1. while loop

$i = 0;
while($i < 5)
{
    echo $i . PHP_EOL;
    $i++;
}

// 2. do while

do {
    echo $i . PHP_EOL;
    $i++;
} while($i <= 10);

// 3. for loop

for($i = 0; $i < 50; $i++)
{
    if($i % 2 == 0)
    {
        echo $i . "is a even number. \n";
    } else {
        echo $i . "is an odd number. \n";
    }
}

##### Functions in PHP

function calculateFact($n) {
    if($n <= 1)
    {
        return 1;
    }

    $fact = $n * calculateFact($n - 1);
    return $fact;
}

$result = calculateFact(3);
print_r($result);


