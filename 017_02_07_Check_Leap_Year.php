<?php
function is_leap_year($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    }
    return false;
}
$year = (int)readline("Enter a year: ");
if (is_leap_year($year)) {
    echo "Leap year\n";
} else {
    echo "Not a leap year\n";
}
