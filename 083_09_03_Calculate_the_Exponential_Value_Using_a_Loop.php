<?php
$base = (int)readline("Enter the base: ");
$exponent = (int)readline("Enter the exponent: ");
$result = 1;
for ($i = 0; $i < $exponent; $i++) {
    $result *= $base;
}
echo "Result: " . $result . "\n";
