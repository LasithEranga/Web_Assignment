<?php

if(isset($_GET['delete_staff'])){

$delete_id = $_GET['delete_staff'];

$query = "DELETE FROM staff WHERE nic='$delete_id'";

$deleted = mysqli_query($Con,$query);

if($deleted){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('home.php?view_staff','_self')</script>";

}

}

?>