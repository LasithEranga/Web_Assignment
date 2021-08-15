<?php
include('db.php');
  $fname = $_POST['fname'];
  $lname  = $_POST['lname'];
  $name_initials = $_POST['name_initials'];
  $dob = $_POST['dob'];
  $nic = $_POST['nic'];
  $gender = $_POST['gender'];
  $contact_no = $_POST['contact_no'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $post = $_POST['post'];
  $salary = $_POST['salary'];
  $query = "UPDATE `labour_details` SET `nic`='$nic',`fname`='$fname',`lname`='$lname',`name_initals`='$name_initials',`dob`='$dob',`gender`='$gender',`contact_number`='$contact_no',`address`='$address',`email`='$email',`post`='$post',`salary`='$salary' WHERE nic='$nic'";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('User updated successfully ')</script>";
    echo "<script> window.open('home.php?view_labour','_self')</script>";
  }
?>