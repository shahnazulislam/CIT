<?php
session_start();

require '../layouts/db.php';

$error = [];

if (isset($_POST['submit'])){
  $email = trim(htmlentities($_POST['email']));
  $password = trim(htmlentities($_POST['password']));
  $encpass = md5($password);

  //vlidation section
  if(empty($email)){
    $error['emailError'] = "Please inter your email";
  }else if(!filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)){
    $error['emailError'] = "Inter the valid email";
  }

  if(empty($password)){
    $error['passError'] = "Please Inter Your Email";
  }else if(strlen($password) > 8){
    $error['passError'] = "Password must be less then 8 carector";
  }

  //select query

  if(empty($error)){
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$encpass'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
      $user = mysqli_fetch_assoc($result);
      unset($user['password']);
      $_SESSION['user'] = $user;


      header('location:../index.php');
    }else{
      $invalid = "User Not Found";
    }
  }
}

include_once "user_view/login.view.php";

unset($_SESSION['success']);
?>