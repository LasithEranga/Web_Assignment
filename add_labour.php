<div class="col-12 py-5"> </div>
<form id="form" class="col-12 justify-content-center align-items-center d-flex" action="save_labour.php" method="POST">

  <div class="d-flex flex-column col-lg-9 border">
    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-male fs-5 text-dark pe-4 ps-2"></i>Add Labour </div>
    <div class="p-2">
      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label ">First Name</label>
        <div class="col-lg-9">
          <input type="text" class="form-control mb-2" id="fname" name="fname">
          <p id="err_fname" style="color: lightcoral;display:none"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">Last Name</label>
        <div class="col-lg-9">
          <input type="text" class="form-control mb-2" id="lname" name="lname">
          <p id="err_lname" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">Name with Initals</label>
        <div class="col-lg-9">
          <input type="text" class="form-control mb-2" id="name_initials" name="name_initials">
          <p id="err_name_initials" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">Birthday</label>
        <div class="col-lg-9">
          <input type="date" class="form-control mb-2" id="dob" name="dob">
          <p id="err_dob" style="color: lightcoral;display:none">Birthday is required!</p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">NIC</label>
        <div class="col-lg-9">
          <input type="text" class="form-control mb-2" id="nic" name="nic">
          <p id="err_nic" style="color: lightcoral;display:none"></p>
        </div>
      </div>


      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-3 col-form-label">Gender</label>
        <div class="col-lg-9">
          <select class="form-select" aria-label="Default select example" id="gender" name="gender">
            <option selected>Select Gender</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
          </select>
          <p id="err_gender" style="color: lightcoral;display:none">Please select the gender</p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">Contact Number</label>
        <div class="col-lg-9">
          <input type="text" class="form-control mb-2" id="contact_no" name="contact_no">
          <p id="err_contact" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label"> Address</label>
        <div class="col-lg-9">
          <textarea class="form-control mb-2" id="address" name="address"></textarea>
          <p id="err_address" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">Email Address</label>
        <div class="col-lg-9">
          <input type="email" class="form-control mb-2" id="email" name="email">
          <p id="err_email" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-3 col-form-label">Post</label>
        <div class="col-lg-9">
          <select class="form-select" id="post" name="post">
            <option selected>Select Post</option>
            <option value="1">Admin</option>
            <option value="2">Principal</option>
            <option value="2">Matron</option>
          </select>
          <p id="err_post" style="color: lightcoral;display:none">Please Select the post</p>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-lg-3 col-form-label">Salary</label>
        <div class="col-lg-9">
          <input type="text" class="form-control mb-2" id="salary" name="salary">
          <p id="err_salary" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword" class="col-lg-3 col-form-label">Employee Image</label>
        <div class="col-lg-9">
          <input type="file" class="form-control-file" id="image" name="image">
          <p id="err_image" style="color: lightcoral;display:none"></p>
        </div>

      </div>

      <div class="form-group row">
        <div class="col-lg-3 col-form-label"></div>
        <div class="col-lg-9">
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