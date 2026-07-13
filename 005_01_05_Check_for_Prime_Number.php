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
$num = (int)readline("Enter a number: ");
if (is_prime($num)) {
    echo "Prime\n";
} else {
    echo "Not prime\n";
}
