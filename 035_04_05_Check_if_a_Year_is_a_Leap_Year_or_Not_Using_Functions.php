<?php
function is_leap_year($year) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    } else {
        return false;
    }
}
$year = (int)readline("Enter a year: ");
if (is_leap_year($year)) {
    echo "Leap year\n";
} else {
    echo "Not a leap year\n";
}
