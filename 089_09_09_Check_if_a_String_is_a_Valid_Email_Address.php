<?php
function is_valid_email($email) {
    return preg_match("/[^@]+@[^@]+\.[^@]+/", $email) === 1;
}
$input_email = readline("Enter an email address: ");
if (is_valid_email($input_email)) {
    echo "Valid email address\n";
} else {
    echo "Invalid email address\n";
}
