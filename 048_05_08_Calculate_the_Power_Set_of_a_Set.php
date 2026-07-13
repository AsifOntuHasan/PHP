<?php
function power_set($s) {
    $result = [];
    $len = count($s);
    for ($i = 0; $i < (1 << $len); $i++) {
        $subset = [];
        for ($j = 0; $j < $len; $j++) {
            if ($i & (1 << $j)) {
                $subset[] = $s[$j];
            }
        }
        $result[] = $subset;
    }
    return $result;
}
$input_set = [1, 2, 3];
echo "Power set: " . json_encode(power_set($input_set)) . "\n";
