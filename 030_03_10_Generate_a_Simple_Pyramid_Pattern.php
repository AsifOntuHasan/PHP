<?php
$n = 5;
for ($i = 0; $i < $n; $i++) {
    echo str_repeat(" ", $n - $i - 1) . str_repeat("*", 2 * $i + 1) . "\n";
}
