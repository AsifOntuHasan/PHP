<?php
function binary_search_recursive($arr, $low, $high, $x) {
    if ($high >= $low) {
        $mid = (int)(($high + $low) / 2);
        if ($arr[$mid] == $x) {
            return $mid;
        } elseif ($arr[$mid] > $x) {
            return binary_search_recursive($arr, $low, $mid - 1, $x);
        } else {
            return binary_search_recursive($arr, $mid + 1, $high, $x);
        }
    }
    return -1;
}
$arr = [2, 3, 4, 10, 40];
$x = 10;
$result = binary_search_recursive($arr, 0, count($arr) - 1, $x);
if ($result != -1) {
    echo "Element found at index $result\n";
} else {
    echo "Element not found\n";
}
