<?php


if(isset($_GET['edit_child'])){

$edit_id = $_GET['edit_child'];

$get_pro = "select * from child_details where id='$edit_id'";
$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);
$name_initials = $row_pro['name_initials'];
$full_name = $row_pro['full_name'];
$dob = $row_pro['dob'];
$gender = $row_pro['gender'];


}

?>
<div class="col-12 py-4"> </div>

<form class="col-12 justify-content-center align-items-center d-flex mt-5">

  <div class="d-flex flex-column col-md-10 border">
    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-child text-dark pe-4 ps-2"></i>Add Child </div>
    <div class="p-2">
      <div class="form-group row">
        <label for="inputPassword" class="col-md-2 col-form-label ">Name with Initials</label>
        <div class="col-md-10">
          <input type="text" class="form-control mb-2" id="name_with_initials" value="<?php echo $name_initials?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-md-2 col-form-label">Full Name</label>
        <div class="col-md-10">
          <input type="text" class="form-control mb-2" id="full_name" value="<?php echo $full_name?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-md-2 col-form-label">Birthday</label>
        <div class="col-md-10">
          <input type="date" class="form-control mb-2" id="dob" value="<?php echo $dob?>">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="gender" class="col-md-2 col-form-label">Gender</label>
        <div class="col-md-10">
          <select class="form-select" aria-label="Gender select">
            <option value="Male" <?php if($gender==='Male') echo "selected";?>>Male</option>
            <option value="Female" <?php if($gender==='Female') echo "selected";?>>Female</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-md-2 col-form-label">Child Image</label>
        <div class="col-md-10">
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

      </div>

      <div class="form-group row">
        <div class="col-md-2 col-form-label"></div>
        <div class="col-md-10">
          <button type="button" class="btn btn-primary col-12">Update Details</button>
        </div>
      </div>


    </div>
  </div>
</form>