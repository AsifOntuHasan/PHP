<?php
function compute_gcd($x, $y) {
    while ($y) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }
    return $x;
}
$num1 = (int)readline("Enter first number: ");
$num2 = (int)readline("Enter second number: ");
echo "GCD: " . compute_gcd($num1, $num2) . "\n";
