<?php
$year = (int)readline("Enter the year: ");
$month = (int)readline("Enter the month: ");
$timestamp = mktime(0, 0, 0, $month, 1, $year);
$days_in_month = date('t', $timestamp);
$first_day = date('w', $timestamp);
echo "    " . date('F Y', $timestamp) . "\n";
echo " Su Mo Tu We Th Fr Sa\n";
for ($i = 0; $i < $first_day; $i++) {
    echo "   ";
}
for ($day = 1; $day <= $days_in_month; $day++) {
    printf("%3d", $day);
    if (($day + $first_day) % 7 == 0) {
        echo "\n";
    }
}
echo "\n";
