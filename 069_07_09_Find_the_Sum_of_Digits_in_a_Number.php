<?php
function sum_of_digits($n) {
    $sum = 0;
    $str = (string)abs($n);
    for ($i = 0; $i < strlen($str); $i++) {
        $sum += (int)$str[$i];
    }
    return $sum;
}
$number = (int)readline("Enter a number: ");
echo "Sum of digits: " . sum_of_digits($number) . "\n";
