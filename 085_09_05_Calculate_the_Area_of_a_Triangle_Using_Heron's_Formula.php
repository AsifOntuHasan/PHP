<?php
$a = (float)readline("Enter the length of side a: ");
$b = (float)readline("Enter the length of side b: ");
$c = (float)readline("Enter the length of side c: ");
$s = ($a + $b + $c) / 2;
$area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
echo "Area of the triangle: " . $area . "\n";
