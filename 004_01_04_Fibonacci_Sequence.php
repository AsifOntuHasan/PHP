<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$terms = (int)readline("Enter the number of terms: ");
echo "Fibonacci sequence:\n";
for ($i = 0; $i < $terms; $i++) {
    echo fibonacci($i) . "\n";
}
