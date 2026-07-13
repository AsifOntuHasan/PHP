<?php
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= (int)sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = (int)readline("Enter a number: ");
if (is_prime($number)) {
    echo "Prime number\n";
} else {
    echo "Not a prime number\n";
}
