<?php
function selection_sort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        $min_idx = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_idx]) {
                $min_idx = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_idx];
        $arr[$min_idx] = $temp;
    }
}
$arr = [64, 25, 12, 22, 11];
selection_sort($arr);
echo "Sorted array: " . json_encode($arr) . "\n";
