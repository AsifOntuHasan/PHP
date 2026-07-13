<?php
function compute_gcd($a, $b) {
    while ($b) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
$numbers = [24, 36, 48, 60, 72];
$gcd = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $gcd = compute_gcd($gcd, $numbers[$i]);
}
echo "GCD of the numbers: " . $gcd . "\n";
