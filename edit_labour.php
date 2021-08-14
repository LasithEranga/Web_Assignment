<?php


if(isset($_GET['edit_labour'])){

$edit_id = $_GET['edit_labour'];

$query = "select * from labour_details where nic='$edit_id'";
$result = mysqli_query($Con,$query);

$list = mysqli_fetch_array($result);
$nic = $list['nic'];
$fname = $list['fname'];
$lname = $list['lname'];
$name_initals = $list['name_initals'];
$dob = $list['dob'];
$gender = $list['gender'];
$contact_number = $list['contact_number'];
$address = $list['address'];
$email = $list['email'];
$post = $list['post'];
$salary = $list['salary'];


}

?>

<div class="col-12 py-5"> </div>
<form class="col-12 justify-content-center align-items-center d-flex">

  <div class="d-flex flex-column col-lg-8 border">
    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-male fs-5 text-dark pe-4 ps-2"></i>Add Labour </div>
    <div class="p-2">
    
      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label ">First Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $fname?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Last Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $lname?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Name with Initals</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $name_initals?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Birthday</label>
        <div class="col-lg-10">
          <input type="date" class="form-control mb-2" value="<?php echo $dob?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">NIC</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $nic?>">
        </div>
      </div>


      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-2 col-form-label">Gender</label>
        <div class="col-lg-10">
          <select class="form-select" aria-label="Default select example">
            <option value="Male" <?php if($gender==='Male') echo "selected";?> >Male</option>
            <option value="Female" <?php if($gender==='Female') echo "selected";?> >Female</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Contact Number</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $contact_number?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label"> Address</label>
        <div class="col-lg-10">
          <textarea class="form-control mb-2" ><?php echo $address?></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Salary</label>
        <div class="col-lg-10">
          <input type="email" class="form-control mb-2" value="<?php echo $salary?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Email Address</label>
        <div class="col-lg-10">
          <input type="email" class="form-control mb-2" value="<?php echo $email?>">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-2 col-form-label">Post</label>
        <div class="col-lg-10">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Post</option>
            <option value="Admin" <?php if($gender==='Admin') echo "selected";?> >Admin</option>
            <option value="Principal" <?php if($gender==='Principal') echo "selected";?> >Principal</option>
            <option value="Matron" <?php if($gender==='Matron') echo "selected";?> >Matron</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-2 col-form-label">Employee Image</label>
        <div class="col-lg-10">
          <input type="file" class="form-control-file" value="<?php echo $nic?>">
        </div>

      </div>

      <div class="form-group row">
        <div class="col-lg-2 col-form-label"></div>
        <div class="col-lg-10">
          <button type="button" class="btn btn-primary col-12">Submit</button>
        </div>
      </div>


    </div>
  </div>
</form>