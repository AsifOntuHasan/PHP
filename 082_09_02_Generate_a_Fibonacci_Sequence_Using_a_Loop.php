<?php
function generate_fibonacci($n) {
    $fibonacci_sequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $next_num = $fibonacci_sequence[count($fibonacci_sequence) - 1] + $fibonacci_sequence[count($fibonacci_sequence) - 2];
        $fibonacci_sequence[] = $next_num;
    }
    return $fibonacci_sequence;
}
$terms = 10;
echo "Fibonacci sequence: " . json_encode(generate_fibonacci($terms)) . "\n";
