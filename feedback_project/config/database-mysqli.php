<?php

const DB_HOST = 'localhost';
define('DB_USER', 'daniel');
define('DB_PASS', '**Azerty**');
define('DB_NAME', 'php_dev_traversy');


// create connection agent
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// echo "<pre>";
// print_r($conn);
// echo "<pre/>";

// check connection
if ($conn->connect_error) {
    die("CONNECTION FAILED : {$conn->connect_error}");
}

# echo 'Connected !';
