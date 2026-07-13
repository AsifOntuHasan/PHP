<?php
function quick_sort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }
    $pivot = $arr[(int)(count($arr) / 2)];
    $left = [];
    $middle = [];
    $right = [];
    foreach ($arr as $x) {
        if ($x < $pivot) {
            $left[] = $x;
        } elseif ($x == $pivot) {
            $middle[] = $x;
        } else {
            $right[] = $x;
        }
    }
    return array_merge(quick_sort($left), $middle, quick_sort($right));
}
$arr = [12, 11, 13, 5, 6, 7];
$sorted_arr = quick_sort($arr);
echo "Sorted array: " . json_encode($sorted_arr) . "\n";
