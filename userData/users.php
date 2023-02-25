<?php
include 'config.php';
?>
<?php
$error = [];
if (isset($_POST['submit'])) {

  $fname = trim(htmlentities('fname'));
  $lname = trim(htmlentities('lname'));
  $email = trim(htmlentities('email'));
  $password = trim(htmlentities('password'));



  if (empty($fname)) {
    $error['fnameError'] = 'Enter your first name!';
  }
  if (empty($lname)) {
    $error['lnameError'] = 'Enter your first name!';
  }
  if (empty($email)) {
    $error['emailError'] = 'Enter your first name!';
  }
  if (empty($password)) {
    $error['passwordError'] = 'Enter your first name!';
  } elseif (strlen($password)) {
    $error['passwordError'] = 'Password must be 8 carector';
  }

  if (empty($error)) {
    $error['fnameError'] = 'gfdgfd ';

    $sql_query = "INSERT INTO student(first_name, last_name, email, password) VALUES('$fname', '$lname', '$email', '$password')";
    $result = mysqli_query($conn, $sql_query) or die('Query faild');

    echo $result;
  }
}
?>