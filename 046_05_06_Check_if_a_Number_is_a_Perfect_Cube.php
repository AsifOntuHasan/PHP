<?php
function is_perfect_cube($n) {
    $root = round(pow($n, 1/3));
    return $root * $root * $root == $n;
}
$number = (int)readline("Enter a number: ");
if (is_perfect_cube($number)) {
    echo "Perfect cube\n";
} else {
    echo "Not a perfect cube\n";
}
