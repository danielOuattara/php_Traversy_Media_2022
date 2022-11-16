<?php

const DB_HOST = 'localhost';
define('DB_USER', 'daniel');
define('DB_PASS', '**Azerty**');
define('DB_NAME', 'php_dev_traversy');


// create connection agent

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

# print_r($conn);

if ($conn->connect_error) {
    die("Connection Failed {$conn->connect_error}");
}

# echo 'Connected !';
