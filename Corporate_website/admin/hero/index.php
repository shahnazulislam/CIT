
<?php

require_once "../layouts/db.php";

$error = [];

if (isset($_POST['submit'])) {
  $title          = trim(htmlentities($_POST['title']));
  $discription    = trim(htmlentities($_POST['discription']));
  $btn_txt        = trim(htmlentities($_POST['btn_txt']));
  $btn_url        = trim(htmlentities($_POST['btn_url']));

  if (empty($title)) {
    $error['titleError'] = "Inter banner title";
  } elseif (strlen($title) > 100) {
    $error['titleError'] = "Please give title less then 100 carector";
  }
  if (empty($discription)) {
    $errorp['disError'] = "Inter banner discription";
  } elseif (strlen($discription) > 300) {
    $error['disError'] = "please give discription less then 300 carector";
  }
  if (empty($btn_txt)) {
    $error['btxtError'] = "Inter banner title";
  } elseif (strlen($btn_txt) > 20) {
    $error['btxtError'] = "Please give title less then 20 carector";
  }
  if (empty($btn_url)) {
    $error['burlError'] = "Inter banner title";
  } elseif (strlen($btn_url) > 255) {
    $error['burlError'] = "Please give title less then 255 carector";
  }

  if (empty($error)) {
    $query = "INSERT INTO hero(title, description_text, btn_text, btn_url) VALUES('$title', '$discription', '$btn_txt', '$btn_url')";

    $result = mysqli_query($conn, $query);
    if ($result) {
      $success = "Banner add successfully done";
    } else {
      $errors = "Banner not inserted";
    }
  }
}

//select query

$query1 = "SELECT * FROM hero";

$result1 = mysqli_query($conn, $query1);

if (mysqli_num_rows($result1) > 0) {
  $banners = mysqli_fetch_all($result1, true);
}


include_once "index.view.php";



?>