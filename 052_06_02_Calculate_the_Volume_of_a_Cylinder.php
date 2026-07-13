<?php
$radius = (float)readline("Enter the radius of the cylinder: ");
$height = (float)readline("Enter the height of the cylinder: ");
$volume = M_PI * $radius * $radius * $height;
echo "Volume of the cylinder: " . $volume . "\n";
