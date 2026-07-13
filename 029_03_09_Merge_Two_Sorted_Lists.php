<?php
$list1 = [1, 3, 5, 7];
$list2 = [2, 4, 6, 8];
$merged_list = array_merge($list1, $list2);
sort($merged_list);
echo "Merged and sorted list: " . json_encode($merged_list) . "\n";
