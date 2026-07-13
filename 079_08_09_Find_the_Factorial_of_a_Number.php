<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$num = (int)readline("Enter a number: ");
echo "Factorial: " . factorial($num) . "\n";
