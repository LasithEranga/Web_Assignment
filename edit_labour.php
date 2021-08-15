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
<form id="form" class="col-12 justify-content-center align-items-center d-flex" action="update_labour.php" method="POST">

  <div class="d-flex flex-column col-lg-8 border">
    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-male fs-5 text-dark pe-4 ps-2"></i>Add Labour </div>
    <div class="p-2">
    
      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label ">First Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $fname?>" id="fname" name="fname">
          <p id="err_fname" style="color: lightcoral;display:none"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Last Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $lname?>" id="lname" name="lname">
          <p id="err_lname" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Name with Initals</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $name_initals?>" id="name_initials" name="name_initials">
          <p id="err_name_initials" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Birthday</label>
        <div class="col-lg-10">
          <input type="date" class="form-control mb-2" value="<?php echo $dob?>" id="dob" name="dob">
          <p id="err_dob" style="color: lightcoral;display:none">Birthday is required!</p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">NIC</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $nic?>" id="nic" name="nic">
          <p id="err_nic" style="color: lightcoral;display:none"></p>
        </div>
      </div>


      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-2 col-form-label">Gender</label>
        <div class="col-lg-10">
          <select class="form-select" aria-label="Default select example" id="gender" name="gender">
            <option value="Male" <?php if($gender==='Male') echo "selected";?> >Male</option>
            <option value="Female" <?php if($gender==='Female') echo "selected";?> >Female</option>
          </select>
          <p id="err_gender" style="color: lightcoral;display:none">Please select the gender</p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Contact Number</label>
        <div class="col-lg-10">
          <input type="text" class="form-control mb-2" value="<?php echo $contact_number?>" id="contact_no" name="contact_no">
          <p id="err_contact" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label"> Address</label>
        <div class="col-lg-10">
          <textarea class="form-control mb-2" id="address" name="address" ><?php echo $address?></textarea>
          <p id="err_address" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Salary</label>
        <div class="col-lg-10">
          <input type="email" class="form-control mb-2" value="<?php echo $salary?>" id="salary" name="salary">
          <p id="err_salary" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-2 col-form-label">Email Address</label>
        <div class="col-lg-10">
          <input type="email" class="form-control mb-2" value="<?php echo $email?>" id="email" name="email">
          <p id="err_email" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-2 col-form-label">Post</label>
        <div class="col-lg-10">
          <select class="form-select" id="post" name="post">
            <option selected>Select Post</option>
            <option value="Admin" <?php if($gender==='Admin') echo "selected";?> >Admin</option>
            <option value="Principal" <?php if($gender==='Principal') echo "selected";?> >Principal</option>
            <option value="Matron" <?php if($gender==='Matron') echo "selected";?> >Matron</option>
          </select>
          <p id="err_post" style="color: lightcoral;display:none">Please select a post</p>
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
          <button type="button" id="save" class="btn btn-primary col-12">Submit</button>
        </div>
      </div>


    </div>
  </div>
</form>

<script src="./validate.js">
</script>
<script>
  document.getElementById("save").addEventListener('click', () => {

    if (ValidateText("fname", "err_fname", "First name ") && ValidateText("lname", "err_lname", "Last name ") && ValidateText("name_initials", "err_name_initials", "Name with initials ") &&
      ValidateDob("dob", "err_dob")&& ValidateNic("nic","err_nic") && ValidateGender("gender", "err_gender") && ValidatePhoneNo("contact_no", "err_contact", "Contact Number ") &&
      ValidateAddress("address", "err_address", "Address ") && ValidateEmail("email", "err_email") && ValidatePost("post", "err_post") && ValidateSalary("salary","err_salary") ) {

        document.getElementById("form").submit();


    }

  });
</script>