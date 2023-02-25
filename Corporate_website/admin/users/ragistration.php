<?php
session_start();
require_once "../layouts/db.php";
$error = [];
if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $image = $_FILES['photo'];
    $encpass = md5($password);

    //validation
    if (empty($name)) {
        $error['nameError'] = "Inter a valid name";
    }
    if (empty($email)) {
        $error['emailError'] = "Inter a valid email";
    }

    if (empty($password)) {
        $error['passError'] = "Please inter your password";
    } elseif (strlen($password) > 8) {
        $error['passError'] = "Password must be 8 carector";
    }

    //image upload

    if ($image['name']) {
        $image_exp = explode('.', $image['name']);
        $image_type = ['jpg', 'png', 'jpeg', 'webp', 'gif'];
        if (!in_array(strtolower(end($image_exp)), $image_type)) {
            $error['imageError'] = "Upload the valid image";
        } elseif ($image['size'] > 5048576) {
            $error['imageError'] = "Max upload size is 4mb!";
        }
        $image_name = uniqid() . '.' . end($image_exp);
        move_uploaded_file($image['tmp_name'], '../upload/profile/' . $image_name);
    } else {
        $error['imageError'] = "Upload your image";
    }
    //insert data
    if (empty($error)) {
        $sql = "INSERT INTO users(name, email, password, photo)VALUES('$name','$email','$encpass','$image')";
        $result = mysqli_query($conn, $sql) or die('Query faild');

        if($result){
          $_SESSION['success'] = "Sign up successfuly done";
          header('location: login.php');
        }
    }
}

require_once "user_view/ragistration.view.php";
