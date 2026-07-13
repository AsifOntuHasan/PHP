<?php
$length = (float)readline("Enter the length of the rectangle: ");
$width = (float)readline("Enter the width of the rectangle: ");
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area: $area, Perimeter: $perimeter\n";
