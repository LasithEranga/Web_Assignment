<?php


if (isset($_GET['view_donar'])) {

    $view_id = $_GET['view_donar'];

    $sqlQuery = "SELECT * from donations WHERE donar_id='$view_id'";
    $resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
}

?>

<div class="col-12 py-5"> </div>
<div class="d-flex flex-column">
    <div class="d-flex flex-row col-md-12">
        <div class="col-5 ms-5">
            <form>
                <div class="d-flex flex-column col-md-12 border">
                    <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-money text-dark pe-4 ps-2"></i>Doner Details </div>
                    <div class="p-2">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control mb-2" id="inputPassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control mb-2" id="inputPassword">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control mb-2" id="inputPassword">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Donation Type</label>
                            <div class="col-sm-9 mt-2">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Donation Type</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Item</option>
                                    <option value="3">Both</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- row -->
        <div class="bg-light col-md-1">

        </div>
        <div class="bg-primary col-md-5 p-4 d-flex flex-row text-white" style="height: 150px;">
            <i class="fa fa-money fa-5x "></i>
            <span class="text-end  col-md-9 fs-1 "><span class="fs-3">Total Donations</span> <br><span id="total">Rs
                    0.00</span> </span>
        </div>
    </div>
    <div class="col-md-12  mt-2 text-dark ps-5">
        Donated Items
    </div>
    <div class="col-12 d-flex justify-content-center align-content-center ">
        <div class="col-12 px-2 ">
            <table id="data" class="table  table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Donar Name</th>
                        <th>Name</th>
                        <th>Qty</th>
                    </tr>
                </thead>
                <tbody class="tb_data">
                    <?php while ($list = mysqli_fetch_assoc($resultSet)) { ?>
                        <tr>
                            <td>
                                <?php echo $list['id']; ?>
                            </td>
                            <td>
                                <?php echo $list['name']; ?>
                            </td>
                            <td>
                                <?php echo $list['qty']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>