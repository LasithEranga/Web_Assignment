<?php
include('db.php');
  $nic = $_POST['nic'];
  $name = $_POST['name'];
  $contactNo  = $_POST['contact_no'];
  $address = $_POST['address'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "UPDATE `staff` SET `nic`='$nic',`name`='$name',`contact_num`='$contactNo',`address`='$address',`email`='$username',`password`='$password' WHERE nic = '$nic'";

  $saved = mysqli_query($Con, $query);

  if ($saved) {
    echo "<script> alert('User updated successfully ')</script>";
    echo "<script> window.open('home.php?view_staff','_self')</script>";
  }
?>