<?php
function find_median($a, $b, $c) {
    $arr = [$a, $b, $c];
    sort($arr);
    return $arr[1];
}
$num1 = (float)readline("Enter the first number: ");
$num2 = (float)readline("Enter the second number: ");
$num3 = (float)readline("Enter the third number: ");
echo "Median: " . find_median($num1, $num2, $num3) . "\n";
