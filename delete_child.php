<?php

if(isset($_GET['delete_child'])){

$delete_id = $_GET['delete_child'];

$query = "DELETE FROM child_details WHERE id='$delete_id'";

$deleted = mysqli_query($Con,$query);

if($deleted){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('home.php?view_child','_self')</script>";

}

}

?>