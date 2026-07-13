<?php
function merge_sort(&$arr) {
    if (count($arr) > 1) {
        $mid = (int)(count($arr) / 2);
        $left_half = array_slice($arr, 0, $mid);
        $right_half = array_slice($arr, $mid);
        merge_sort($left_half);
        merge_sort($right_half);
        $i = $j = $k = 0;
        while ($i < count($left_half) && $j < count($right_half)) {
            if ($left_half[$i] < $right_half[$j]) {
                $arr[$k] = $left_half[$i];
                $i++;
            } else {
                $arr[$k] = $right_half[$j];
                $j++;
            }
            $k++;
        }
        while ($i < count($left_half)) {
            $arr[$k] = $left_half[$i];
            $i++;
            $k++;
        }
        while ($j < count($right_half)) {
            $arr[$k] = $right_half[$j];
            $j++;
            $k++;
        }
    }
}
$arr = [12, 11, 13, 5, 6, 7];
merge_sort($arr);
echo "Sorted array: " . json_encode($arr) . "\n";
