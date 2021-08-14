<?php
include("db.php");
$sqlQuery = "SELECT * FROM donars ";
$resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
?>
<div class="col-12 py-3"></div>
<div class="col-12 pt-5 px-2">
    <p class="bg-dark py-2 text-white"><i id="arrow" class="fa fa-fw fa-money text-light pe-4 ps-2"></i> View Donation</p>
    <div class="col-sm-12">
        <input type="text" class="form-control mb-2" id="search" placeholder="Search Donation" onkeyup="Search()">
    </div>
</div>
<div class="col-12 d-flex justify-content-center align-content-center ">
    <div class="col-12 px-2 ">
        <table id="data" class="table  table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>Address</th>
                    <th>Donation Type</th>
                    <th>Date</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody class="tb_data">
                <?php while ($developer = mysqli_fetch_assoc($resultSet)) { ?>
                    <tr id="<?php echo $developer['donar_id']; ?>">
                        <td><?php echo $developer['donar_id']; ?></td>
                        <td><?php echo $developer['donarName']; ?></td>
                        <td><?php echo $developer['contactNo']; ?></td>
                        <td><?php echo $developer['Address']; ?></td>
                        <td><?php echo $developer['donationType']; ?></td>
                        <td><?php echo $developer['date']; ?></td>
                        <td>
                            <a href="home.php?view_donar=<?php echo $developer['donar_id']; ?>">
                                <i class="fa fa-eye"> </i> view
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="search.js"></script>