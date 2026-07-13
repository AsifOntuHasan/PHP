<?php
function compute_gcd($x, $y) {
    while ($y) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }
    return $x;
}

function compute_lcm($x, $y) {
    return ($x * $y) / compute_gcd($x, $y);
}
$num1 = (int)readline("Enter first number: ");
$num2 = (int)readline("Enter second number: ");
echo "LCM: " . compute_lcm($num1, $num2) . "\n";
echo "GCD: " . compute_gcd($num1, $num2) . "\n";
