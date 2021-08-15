<div class="col-12 py-5"> </div>
<form id="form" class="col-12 justify-content-center align-items-center d-flex"  action="save_user.php" method="POST">

    <div class="d-flex flex-column col-md-9 border">
        <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-money text-dark pe-4 ps-2"></i>Add
            Staff </div>
        <div class="p-2">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">NIC No</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-2" id="nic" name="nic">
                    <p id="err_nic" style="color: lightcoral;display:none"></p>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-2" id="name" name="name">
                    <p id="err_name" style="color: lightcoral;display:none"></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Contact No</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-2" id="contact_no" name="contact_no">
                    <p id="err_contact_no" style="color: lightcoral;display:none"></p>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-2" id="address" name="address">
                    <p id="err_address" style="color: lightcoral;display:none"></p>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-2" id="username" name="username">
                    <p id="err_username" style="color: lightcoral;display:none"></p>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control mb-2" id="password" name="password">
                    <p id="err_password" style="color: lightcoral;display:none">Password is required!</p>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2 col-form-label"></div>
                <div class="col-sm-10">
                    <button type="button" id="save" class="btn btn-primary col-12">Save Details</button>
                </div>
            </div>


        </div>
    </div>
</form>

<script src="./validate.js">
</script>
<script>
  document.getElementById("save").addEventListener('click', () => {

    if (ValidateNic("nic","err_nic") && ValidateText("name", "err_name", "Name ") && ValidatePhoneNo("contact_no", "err_contact_no", "Contact Number ") &&
    ValidateAddress("address", "err_address","Address ") && ValidateEmail("username", "err_username") && ValidatePassword("password","err_password")) {

        document.getElementById("form").submit();


    }

  });
</script>