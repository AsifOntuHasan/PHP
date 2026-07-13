<?php
$list_of_dicts = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Bob', 'age' => 35]
];
usort($list_of_dicts, function($a, $b) {
    return $a['age'] - $b['age'];
});
echo "Sorted list of dictionaries: " . json_encode($list_of_dicts) . "\n";
