<?php
function add($x, $y) {
    return $x + $y;
}
function subtract($x, $y) {
    return $x - $y;
}
function multiply($x, $y) {
    return $x * $y;
}
function divide($x, $y) {
    if ($y == 0) {
        return "Cannot divide by zero";
    }
    return $x / $y;
}
$num1 = (float)readline("Enter first number: ");
$num2 = (float)readline("Enter second number: ");
echo "Sum: " . add($num1, $num2) . "\n";
echo "Difference: " . subtract($num1, $num2) . "\n";
echo "Product: " . multiply($num1, $num2) . "\n";
echo "Quotient: " . divide($num1, $num2) . "\n";
