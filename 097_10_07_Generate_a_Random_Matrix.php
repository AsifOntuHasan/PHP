<?php
$rows = 3;
$cols = 3;
$random_matrix = [];
for ($i = 0; $i < $rows; $i++) {
    $row = [];
    for ($j = 0; $j < $cols; $j++) {
        $row[] = mt_rand() / mt_getrandmax();
    }
    $random_matrix[] = $row;
}
echo "Random matrix:\n";
foreach ($random_matrix as $row) {
    echo json_encode($row) . "\n";
}
