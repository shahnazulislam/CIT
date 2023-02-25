<?php
$hostname = "localhost";
$userName = "root";
$pass     = "";
$dbName   = "cit_database";

$conn = mysqli_connect($hostname, $userName, $pass, $dbName) or die("Database connection faild");
?>