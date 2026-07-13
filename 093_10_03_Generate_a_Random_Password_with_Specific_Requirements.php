<?php
function generate_password($length, $include_digits = true, $include_special_chars = true) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($include_digits) {
        $characters .= '0123456789';
    }
    if ($include_special_chars) {
        $characters .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
    }
    $password = '';
    $char_len = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $char_len)];
    }
    return $password;
}
$password_length = 12;
echo "Generated password: " . generate_password($password_length) . "\n";
