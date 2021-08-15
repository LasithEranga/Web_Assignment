<?php
include('db.php');
  $id = $_POST['id'];
  $name_with_initials = $_POST['name_with_initials'];
  $fname = $_POST['fname'];
  $dob  = $_POST['dob'];
  $gender = $_POST['gender'];
  $query = "UPDATE `child_details` SET `name_initials`='$name_with_initials',`full_name`='$fname',`gender`='$gender',`dob`='$dob' WHERE id=$id";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('User updated successfully ')</script>";
    echo "<script> window.open('home.php?view_child','_self')</script>";
  }
?>