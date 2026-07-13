<?php
$data = [1, 2, 3, 4, 5];
$mean = array_sum($data) / count($data);
$sum_sq = 0;
foreach ($data as $x) {
    $sum_sq += pow($x - $mean, 2);
}
$std_dev = sqrt($sum_sq / (count($data) - 1));
echo "Standard deviation: " . $std_dev . "\n";
