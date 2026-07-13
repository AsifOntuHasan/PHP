<?php
function sum_of_natural_numbers($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return $n + sum_of_natural_numbers($n - 1);
    }
}
$num = (int)readline("Enter a number: ");
echo "Sum of natural numbers: " . sum_of_natural_numbers($num) . "\n";
