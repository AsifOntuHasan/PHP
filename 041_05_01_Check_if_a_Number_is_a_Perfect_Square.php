<?php
function is_perfect_square($n) {
    $root = (int)sqrt($n);
    return $root * $root == $n;
}
$number = (int)readline("Enter a number: ");
if (is_perfect_square($number)) {
    echo "Perfect square\n";
} else {
    echo "Not a perfect square\n";
}
