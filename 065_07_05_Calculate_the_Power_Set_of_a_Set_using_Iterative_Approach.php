<?php
function power_set_iterative($s) {
    $power_set = [[]];
    foreach ($s as $elem) {
        $temp = [];
        foreach ($power_set as $sub_set) {
            $temp[] = array_merge($sub_set, [$elem]);
        }
        $power_set = array_merge($power_set, $temp);
    }
    return $power_set;
}
$input_set = [1, 2, 3];
echo "Power set (iterative): " . json_encode(power_set_iterative($input_set)) . "\n";
