<?php


//upload.php
if (isset($_FILES["image_url"]["name"])) {
  $test = explode('.', $_FILES["image_url"]["name"]);
  $ext = end($test);
  $name = md5(rand(100000, 999999)) . '.' . $ext;
  $location = './image_url/' . $name;
  move_uploaded_file($_FILES["image_url"]["tmp_name"], $location);


  // Start the session
  session_start();
  $_SESSION['image_url'] = $location;
  session_write_close();

  echo '<a href="' . $location . '" target="_blank">View File </a>';

  // or Image echo '<img src="'.$location.'" height="150" width="225" class="img-image_url" />';
}

//upload.php
if (isset($_FILES["thumbnail"]["name"])) {
  $test = explode('.', $_FILES["thumbnail"]["name"]);
  $ext = end($test);
  $name = md5(rand(100000, 999999)) . '.' . $ext;
  $location = './thumbnail/' . $name;
  move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $location);


  // Start the session
  session_start();
  $_SESSION['thumbnail'] = $location;
  session_write_close();

  echo '<a href="' . $location . '" target="_blank">View File </a>';

  // or Image echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
}
//upload.php
if (isset($_FILES["image"]["name"])) {
  $test = explode('.', $_FILES["image"]["name"]);
  $ext = end($test);
  $name = md5(rand(100000, 999999)) . '.' . $ext;
  $location = './image/' . $name;
  move_uploaded_file($_FILES["image"]["tmp_name"], $location);


  // Start the session
  session_start();
  $_SESSION['image'] = $location;
  session_write_close();

  echo '<a href="' . $location . '" target="_blank">View File </a>';

  // or Image echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
}
if (isset($_FILES["team_photo"]["name"])) {
  $test = explode('.', $_FILES["team_photo"]["name"]);
  $ext = end($test);
  $name = md5(rand(100000, 999999)) . '.' . $ext;
  $location = './team_photo/' . $name;
  move_uploaded_file($_FILES["team_photo"]["tmp_name"], $location);


  // Start the session
  session_start();
  $_SESSION['team_photo'] = $location;
  session_write_close();

  echo '<a href="' . $location . '" target="_blank">View File </a>';

  // or Image echo '<img src="'.$location.'" height="150" width="225" class="img-team_photo" />';
}
