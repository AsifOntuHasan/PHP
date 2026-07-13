<?php
function generate_primes($start, $end) {
    $primes = [];
    for ($num = $start; $num <= $end; $num++) {
        if ($num > 1) {
            $is_prime = true;
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $is_prime = false;
                    break;
                }
            }
            if ($is_prime) {
                $primes[] = $num;
            }
        }
    }
    return $primes;
}
$start_range = (int)readline("Enter the starting range: ");
$end_range = (int)readline("Enter the ending range: ");
echo "Prime numbers: " . json_encode(generate_primes($start_range, $end_range)) . "\n";
