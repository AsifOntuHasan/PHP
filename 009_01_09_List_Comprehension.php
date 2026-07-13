<?php
$squares = [];
for ($i = 0; $i < 10; $i++) {
    $squares[] = $i * $i;
}
echo "Squares: " . json_encode($squares) . "\n";
