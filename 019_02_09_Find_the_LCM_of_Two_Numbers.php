<?php
function compute_lcm($x, $y) {
    $greater = $x > $y ? $x : $y;
    while (true) {
        if ($greater % $x == 0 && $greater % $y == 0) {
            return $greater;
        }
        $greater++;
    }
}
$num1 = (int)readline("Enter first number: ");
$num2 = (int)readline("Enter second number: ");
echo "LCM: " . compute_lcm($num1, $num2) . "\n";
