<div class="col-12 py-4"> </div>
<form id="form" method="POST" class="col-12 justify-content-center align-items-center d-flex mt-5" action="save_child.php">

  <div class="d-flex flex-column col-md-10 border">
    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-child text-dark pe-4 ps-2"></i>Add Child </div>
    <div class="p-2">
      <div class="form-group row">
        <label for="name_with_initials" class="col-md-2 col-form-label ">Name with Initials</label>
        <div class="col-md-10">
          <input type="text" class="form-control mb-2" id="name_with_initials" name="name_with_initials">
          <p id="err_name_initial" style="color: lightcoral;display:none"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="fname" class="col-md-2 col-form-label">Full Name</label>
        <div class="col-md-10">
          <input type="text" class="form-control mb-2" id="fname" name="fname">
          <p id="err_full_name" style="color: lightcoral;display:none"></p>

        </div>
      </div>

      <div class="form-group row">
        <label for="dob" class="col-md-2 col-form-label">Birthday</label>
        <div class="col-md-10">
          <input type="date" class="form-control mb-2" id="dob" name="dob">
          <p id="err_dob" style="color: lightcoral;display:none">Please select birthday</p>

        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="gender" class="col-md-2 col-form-label">Gender</label>
        <div class="col-md-10">
          <select class="form-select" id="gender" name="gender">
            <option selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <p id="err_gender" style="color: lightcoral;display:none">Please select gender</p>

        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="childimage" class="col-md-2 col-form-label">Child Image</label>
        <div class="col-md-10">
          <input type="file" class="form-control-file" id="child_image" name="image">
        </div>

      </div>

      <div class="form-group row">
        <div class="col-md-2 col-form-label"></div>
        <div class="col-md-10">
          <button type="button" id="save" class="btn btn-primary col-12" name="saveDetails">Submit</button>
        </div>
      </div>


    </div>
  </div>
</form>
<script src="./validate.js">
</script>
<script>
  document.getElementById("save").addEventListener('click', () => {

    if (ValidateText("name_with_initials", "err_name_initial", "Name with Initials ") && ValidateText("fname", "err_full_name", "Full name ") &&
      ValidateDob("dob", "err_dob") && ValidateGender("gender", "err_gender")) {

        document.getElementById("form").submit();


    }

  });
</script>

