<?php
function is_perfect_number($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}
$number = (int)readline("Enter a number: ");
if (is_perfect_number($number)) {
    echo "Perfect number\n";
} else {
    echo "Not a perfect number\n";
}
