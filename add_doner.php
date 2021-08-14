<div class="col-12 py-5"> </div>
<form id="form" method="POST" class="col-12 justify-content-center align-items-center d-flex" action="save_donar.php">

  <div class="d-flex flex-column col-md-9 border">
    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-money text-dark pe-4 ps-2"></i>Add Donars </div>
    <div class="p-2">
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control mb-2" id="name" name="name">
          <p id="err_name" style="color: lightcoral;display:none"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="contact_no" class="col-sm-2 col-form-label">Contact No</label>
        <div class="col-sm-10">
          <input type="text" class="form-control mb-2" id="contact_no" name="contact_no">
          <p id="err_contact" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control mb-2" id="address" name="address">
          <p id="err_address" style="color: lightcoral;display:none"></p>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="type" class="col-sm-2 col-form-label">Donation Type</label>
        <div class="col-sm-10">
          <select class="form-select" id="type" name="type" aria-label="Default select example">
            <option selected>Select Donation Type</option>
            <option value="Cash">Cash</option>
            <option value="Item">Item</option>
            <option value="Both">Both</option>
          </select>
          <p id="err_select" style="color: lightcoral;display:none">Please select donation type</p>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2 col-form-label"></div>
        <div class="col-sm-10">
          <button type="button" class="btn btn-primary col-12" id="save">Submit</button>
        </div>
      </div>


    </div>
  </div>
</form>
<script src="./validate.js">
</script>
<script>
  document.getElementById("save").addEventListener('click', () => {

    if (ValidateText("name", "err_name", "Name ") && ValidatePhoneNo("contact_no", "err_contact", "Contact Number ") &&
    ValidateAddress("address", "err_address","Address ") && ValidateSelection("type", "err_select")) {

        document.getElementById("form").submit();


    }

  });
</script>