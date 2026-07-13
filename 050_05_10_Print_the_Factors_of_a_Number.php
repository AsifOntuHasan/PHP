<?php
function print_factors($n) {
    $factors = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $factors[] = $i;
        }
    }
    return $factors;
}
$number = (int)readline("Enter a number: ");
echo "Factors: " . json_encode(print_factors($number)) . "\n";
