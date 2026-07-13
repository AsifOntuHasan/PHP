<?php
function gcd($x, $y) {
    if ($y == 0) {
        return $x;
    } else {
        return gcd($y, $x % $y);
    }
}
$num1 = (int)readline("Enter the first number: ");
$num2 = (int)readline("Enter the second number: ");
echo "GCD: " . gcd($num1, $num2) . "\n";
