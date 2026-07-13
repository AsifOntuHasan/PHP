<?php
function linear_search($arr, $x) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $x) {
            return $i;
        }
    }
    return -1;
}
$arr = [4, 2, 1, 7, 5];
$x = 7;
$result = linear_search($arr, $x);
if ($result != -1) {
    echo "Element found at index $result\n";
} else {
    echo "Element not found\n";
}
