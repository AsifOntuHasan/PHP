<?php
function fibonacci_series($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
}
$terms = (int)readline("Enter the number of terms: ");
echo "Fibonacci series:\n";
fibonacci_series($terms);
echo "\n";
