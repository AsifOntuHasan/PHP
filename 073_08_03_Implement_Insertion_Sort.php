<?php
function insertion_sort(&$arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $key < $arr[$j]) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
}
$arr = [12, 11, 13, 5, 6];
insertion_sort($arr);
echo "Sorted array: " . json_encode($arr) . "\n";
