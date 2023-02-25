<?php
require_once "../layouts/db.php";
$error = [];

$query = "SELECT * FROM why_us";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $why_us = mysqli_fetch_all($result);
}

// update query

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $icon_one = trim(htmlentities($_POST['icon_one']));
  $title_one = trim(htmlentities($_POST['title_one']));
  $description_one = trim(htmlentities($_POST['description_one']));
  $icon_two = trim(htmlentities($_POST['icon_one']));
  $title_two = trim(htmlentities($_POST['title_two']));
  $banner = trim(htmlentities($_POST['banner']));
  $video_link = trim(htmlentities($_POST['video_link']));
}

//banner upload
if ($banner['name']) {
  $banner_ex = explode('.', $banner['name']);
  $bannerType = ['jpg', 'png', 'jpeg', 'webp', 'gif'];

  if (!in_array(strtolower(end($banner_ex)), $bannerType)) {
    $error['bannerError'] = "inter valid Banner";
  }elseif($banner['size'] > 3145728 ){
    $error['bannerError'] = "Please upload banner lass then 3 mb or equel";
  }
  $banner_name = uniqid(). '.' . end($banner_ex);
  move_uploaded_file($banner['tmp_name'], '../upload/profile/', $image_name);
  
}else{
  $image_name = $why_us['banner'];
}

//data insert query query1

$uQuery = "UPDATE why_us SET icon_one = '$icon_one', title_one = '$title_one', description_one = '$description_one', icon_two = '$icon_two', title_tow = '$title_two', description_two = '$description_two' video_link = '$video_link' banner = '$banner' WHERE id= {$why_us['id']} ";


if (empty($icon_one)) {
  $error['iconError'] = "Inter banner title";
} elseif (strlen($icon_one) > 100) {
  $error['iconError'] = "Please give title less then 100 carector";
}

if (empty($title_one)) {
  $error['titleError'] = "Inter banner title";
} elseif (strlen($title_one) > 100) {
  $error['titleError'] = "Please give title less then 100 carector";
}

if (empty($description_one)) {
  $error['disError'] = "Inter Description...";
} elseif (strlen($description_one) > 500) {
  $error['disError'] = "Description must have 500 carector...";
}
if (empty($icon_two)) {
  $error['iconError'] = "please inter box icon name";
} elseif (strlen($icon_two) > 50) {
  $error['iconError'] = "box icone name maximum 50 carector";
}

if (empty($title_two)) {
  $error['titleError'] = "Inter banner title";
} elseif (strlen($title_one) > 100) {
  $error['titleError'] = "Please give title less then 100 carector";
}

if (empty($description_two)) {
  $error['disError'] = "Inter Description...";
} elseif (strlen($description_two) > 500) {
  $error['disError'] = "Description must have less then 500 carector...";
}
if (empty($error)) {
  $iQuery = "INSERT INTO services(icon_one, title_one, description_one, icon_tow, title_tow, description_two, banner, icon_link)VALUES('$icon_one', '$title_one', '$description_one', '$icon_tow', '$title_tow', '$description_two', '$icon_link', '$banner')";
  $result1 = mysqli_query($conn, $iQuery);

  if ($result1) {
    $success = "Services add successfuly";
  } else {
    $errors = "Services not added properly";
  }
}


include_once "index.view.php";
