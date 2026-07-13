<?php
function is_palindrome($s) {
    return $s === strrev($s);
}
$string = readline("Enter a string: ");
if (is_palindrome($string)) {
    echo "Palindrome\n";
} else {
    echo "Not a palindrome\n";
}
