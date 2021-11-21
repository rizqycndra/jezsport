<?php

$filename = $_POST['banner'];

$target_dir = "../../../img/";
$target_file = $target_dir . $filename . ".png";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?q=error");
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "png") {
  header("Location: " . $_SERVER['HTTP_REFERER'] . "?q=wrongformat");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 3000000) {
  header("Location: " . $_SERVER['HTTP_REFERER'] . "?q=toolarge");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header("Location: " . $_SERVER['HTTP_REFERER'] . "?q=error");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?q=success");
  } else {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?q=error");
  }
}

