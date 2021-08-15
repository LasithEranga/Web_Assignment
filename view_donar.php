<?php


if (isset($_GET['view_donar'])) {

    $view_id = $_GET['view_donar'];

    $sqlQuery = "SELECT * from donations WHERE donar_id='$view_id'";
    $resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));

    $get_data = "SELECT * from donars WHERE donar_id='$view_id'";
    $result = mysqli_query($Con, $get_data);

    $row = mysqli_fetch_array($result);
    $donarName = $row['donarName'];
    $contactNo = $row['contactNo'];
    $Address = $row['Address'];
    $donationType = $row['donationType'];

    //getting the total donations
    $query = "SELECT SUM(amount) as amount from donations WHERE donar_id='$view_id'";
    $result_total = mysqli_query($Con, $query);

    $total = mysqli_fetch_array($result_total);
    $donar_total = $total['amount'];
}

?>

<div class="col-12 py-5"> </div>
<div class="d-flex flex-column ">
    <div class="d-flex flex-column flex-lg-row  col-12">
        <div class="col-10 col-lg-5 ms-5">
            <form>
                <fieldset disabled>
                    <div class="d-flex flex-column  col-md-12 border">
                        <div class="bg-light py-2 border mb-2"><i id="arrow" class="fa fa-fw fa-money text-dark pe-4 ps-2"></i>Doner Details </div>
                        <div class="p-2">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mb-2" value="<?php echo $donarName ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Contact No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mb-2" value="<?php echo $contactNo ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mb-2" value="<?php echo $Address ?>">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Donation Type</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control mb-2" value="<?php echo $donationType ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- row -->
        <div class="bg-light col-md-1">

        </div>
        <div class=" col-12 col-lg-5 d-flex justify-content-center align-content-center px-2">
            <div class="bg-primary col-10 my-2 p-4 d-flex flex-row text-white d-flex " style="height: 150px;">
                <i class="fa fa-money fa-5x "></i>
                <span class="text-end pe-3 pb-3 col-md-9 fs-1 ps-4"><span class="fs-3">Total Donations</span> <br><span id="total">
                        <?php if ($donar_total > 0) {
                            echo "Rs:" . $donar_total;
                        } else {
                            echo "Rs:0.00";
                        } ?></span> </span>
            </div>
        </div>
    </div>

    <div class="col-12 d-flex justify-content-center align-content-center px-2">

        <div class="col-12 px-4 ">
            <div class="  mt-2 text-light fs-5 ps-2 mb-2 py-2 text-center bg-dark">
                Donated Items
            </div>
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