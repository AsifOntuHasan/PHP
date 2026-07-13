<?php
function is_valid_ip($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP) !== false;
}
$ip_address = readline("Enter an IP address: ");
if (is_valid_ip($ip_address)) {
    echo "Valid IP address\n";
} else {
    echo "Invalid IP address\n";
}
