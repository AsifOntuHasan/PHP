<?php
$random_list = [];
for ($i = 0; $i < 5; $i++) {
    $random_list[] = rand(1, 99);
}
echo "Random list: " . json_encode($random_list) . "\n";
