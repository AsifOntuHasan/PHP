<?php
function generate_pascals_triangle($n) {
    $triangle = [[1]];
    for ($i = 1; $i < $n; $i++) {
        $prev_row = $triangle[$i - 1];
        $curr_row = [1];
        for ($j = 0; $j < $i - 1; $j++) {
            $curr_row[] = $prev_row[$j] + $prev_row[$j + 1];
        }
        $curr_row[] = 1;
        $triangle[] = $curr_row;
    }
    return $triangle;
}
$rows = 5;
echo "Pascal's Triangle:\n";
foreach (generate_pascals_triangle($rows) as $row) {
    echo json_encode($row) . "\n";
}
