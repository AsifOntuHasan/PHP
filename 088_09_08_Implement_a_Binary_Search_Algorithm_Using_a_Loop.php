<?php
function binary_search($arr, $x) {
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);
        if ($arr[$mid] < $x) {
            $low = $mid + 1;
        } elseif ($arr[$mid] > $x) {
            $high = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -1;
}
$arr = [2, 3, 4, 10, 40];
$x = 10;
$result = binary_search($arr, $x);
if ($result != -1) {
    echo "Element found at index $result\n";
} else {
    echo "Element not found\n";
}
