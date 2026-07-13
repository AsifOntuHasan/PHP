<?php
$num = (float)readline("Enter a number: ");
if ($num > 0) {
    echo "Positive number\n";
} elseif ($num < 0) {
    echo "Negative number\n";
} else {
    echo "Zero\n";
}
