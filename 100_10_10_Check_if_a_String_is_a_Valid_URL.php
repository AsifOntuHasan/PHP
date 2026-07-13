<?php
function is_valid_url($url) {
    $regex = '/^(?:http|ftp)s?:\/\/(?:(?:[A-Z0-9](?:[A-Z0-9-]{0,61}[A-Z0-9])?\.)+(?:[A-Z]{2,6}\.?|[A-Z0-9-]{2,}\.?)|localhost|\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}|\[?[A-F0-9]*:[A-F0-9:]+\]?)(?::\d+)?(?:\/?|[/?]\S+)$/i';
    return preg_match($regex, $url) === 1;
}
$input_url = readline("Enter a URL: ");
if (is_valid_url($input_url)) {
    echo "Valid URL\n";
} else {
    echo "Invalid URL\n";
}
