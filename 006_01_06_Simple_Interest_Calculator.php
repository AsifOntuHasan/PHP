<?php
$p = (float)readline("Enter the principal amount: ");
$r = (float)readline("Enter the rate of interest: ");
$t = (float)readline("Enter the time period: ");
$interest = ($p * $r * $t) / 100;
echo "Simple Interest: " . $interest . "\n";
