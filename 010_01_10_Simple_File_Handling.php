<?php
file_put_contents("output.txt", "Hello, this is a sample text.");
$data = file_get_contents("output.txt");
echo "Data from file: " . $data . "\n";
