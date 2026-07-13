<?php
function is_palindrome($s) {
    return $s === strrev($s);
}
$input_string = readline("Enter a string: ");
if (is_palindrome($input_string)) {
    echo "Palindrome\n";
} else {
    echo "Not a palindrome\n";
}
