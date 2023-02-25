<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'users');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Connection Faild');

if (!$conn) {
    echo 'Database connection faild!'.mysqli_connect_error();
}
?>