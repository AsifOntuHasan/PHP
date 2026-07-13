<?php
function is_pangram($s) {
    $alphabet = range('a', 'z');
    $s = strtolower($s);
    foreach ($alphabet as $letter) {
        if (strpos($s, $letter) === false) {
            return false;
        }
    }
    return true;
}
$input_string = readline("Enter a string: ");
if (is_pangram($input_string)) {
    echo "Pangram\n";
} else {
    echo "Not a pangram\n";
}
