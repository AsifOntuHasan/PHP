<?php
$n = 5;
for ($i = 0; $i < $n; $i++) {
    echo str_repeat(" ", $n - $i - 1) . str_repeat("*", $i + 1) . "\n";
}
for ($i = $n - 1; $i > 0; $i--) {
    echo str_repeat(" ", $n - $i) . str_repeat("*", $i) . "\n";
}
