<?php
function is_anagram($s1, $s2) {
    $arr1 = str_split($s1);
    $arr2 = str_split($s2);
    sort($arr1);
    sort($arr2);
    return $arr1 === $arr2;
}
$string1 = readline("Enter the first string: ");
$string2 = readline("Enter the second string: ");
if (is_anagram($string1, $string2)) {
    echo "Anagrams\n";
} else {
    echo "Not anagrams\n";
}
