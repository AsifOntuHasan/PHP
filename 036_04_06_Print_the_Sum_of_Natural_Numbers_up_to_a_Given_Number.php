<?php
$n = (int)readline("Enter a number: ");
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}
echo "Sum of natural numbers: " . $sum . "\n";
