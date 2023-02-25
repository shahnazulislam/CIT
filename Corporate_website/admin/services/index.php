<?php
require_once "../layouts/db.php";
$error = [];

if (isset($_POST['submit'])) {
 $title = trim(htmlentities($_POST['title']));
 $description = trim(htmlentities($_POST['description']));
 $boxIcon = trim(htmlentities($_POST['box_icon']));
 $boxColor = trim(htmlentities($_POST['box_color']));
}

if (empty($title)) {
 $error['titleError'] = "Inter banner title";
} elseif (strlen($title) > 100) {
 $error['titleError'] = "Please give title less then 100 carector";
}

if (empty($description)) {
 $error['disError'] = "Inter Description...";
} elseif (strlen($description) > 500) {
 $error['disError'] = "Description must have 500 carector...";
}
if (empty($boxIcon)) {
 $error['biconError'] = "please inter box icon name";
} elseif (strlen($boxIcon) > 50) {
 $error['biconError'] = "box icone name maximum 50 carector";
}

if (empty($boxColor)) {
 $error['boxcolorError'] = "Please select a box color";
}
if (empty($error)) {
 $query = "INSERT INTO services(title, description, icon, box_color)VALUES('$title', '$description', '$boxIcon', '$boxColor')";
 $result = mysqli_query($conn, $query);

 if ($result) {
  $success = "Services add successfuly";
 } else {
  $errors = "Services not added properly";
 }
}
$query1 = "SELECT * FROM services";
$result1 = mysqli_query($conn, $query1);

if (mysqli_num_rows($result1) > 0) {
 $services = mysqli_fetch_all($result1, true);
}

include_once "index.view.php";
