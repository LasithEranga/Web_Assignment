<?php
include("db.php");
$sqlQuery = "SELECT * FROM staff ";
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
                    <th>Email</th>
                    <th>Password</th>
                    <th>Donation Details</th>
                </tr>
            </thead>
            <tbody class="tb_data">
                <?php while ($developer = mysqli_fetch_assoc($resultSet)) { ?>
                    <tr id="<?php echo $developer['id']; ?>">
                        <td><?php echo $developer['id']; ?></td>
                        <td><?php echo $developer['name']; ?></td>
                        <td><?php echo $developer['contact_num']; ?></td>
                        <td><?php echo $developer['address']; ?></td>
                        <td><?php echo $developer['email']; ?></td>
                        <td><?php echo $developer['password']; ?></td>
                        <td>
                            <a href="home.php?view_donar=<?php echo $developer['id']; ?>">
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