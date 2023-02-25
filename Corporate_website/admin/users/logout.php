<?php
session_start();

unset($_SESSION['user']);

$_SESSION['success'] = "Logout Successfuly done!";

header('location:http://localhost/CIT/Corporate_website/admin/users/login.php');


?>