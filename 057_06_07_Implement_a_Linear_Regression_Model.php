<?php
function linear_regression_fit($X, $y) {
    $n = count($X);
    $sum_x = 0;
    $sum_y = 0;
    $sum_xy = 0;
    $sum_xx = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum_x += $X[$i][0];
        $sum_y += $y[$i];
        $sum_xy += $X[$i][0] * $y[$i];
        $sum_xx += $X[$i][0] * $X[$i][0];
    }
    $slope = ($n * $sum_xy - $sum_x * $sum_y) / ($n * $sum_xx - $sum_x * $sum_x);
    $intercept = ($sum_y - $slope * $sum_x) / $n;
    return [$slope, $intercept];
}

$X = [[1], [1], [2], [2]];
$y = [3, 4, 5, 6];
list($coef, $intercept) = linear_regression_fit($X, $y);
echo "Coef: $coef\n";
echo "Intercept: $intercept\n";
