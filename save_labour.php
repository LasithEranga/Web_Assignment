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
  $query = "INSERT INTO `labour_details`(`nic`, `fname`, `lname`, `name_initals`, `dob`, `gender`, `contact_number`, `address`, `email`, `post`, `salary`) VALUES ('$nic','$fname','$lname','$name_initials','$dob','$gender','$contact_no','$address','$email','$post','$salary')";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('User updated successfully ')</script>";
    echo "<script> window.open('home.php?view_donation','_self')</script>";
  }
?>