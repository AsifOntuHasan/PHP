<?php
function count_vowels($s) {
    $vowels = 'aeiouAEIOU';
    $count = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if (strpos($vowels, $s[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}
$string = readline("Enter a string: ");
echo "Number of vowels: " . count_vowels($string) . "\n";
