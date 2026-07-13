<?php
function is_armstrong($n) {
    $order = strlen((string)$n);
    $temp = $n;
    $sum = 0;
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $order);
        $temp = (int)($temp / 10);
    }
    return $n == $sum;
}
$number = (int)readline("Enter a number: ");
if (is_armstrong($number)) {
    echo "Armstrong number\n";
} else {
    echo "Not an Armstrong number\n";
}
