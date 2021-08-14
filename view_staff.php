<?php
include("db.php");
$sqlQuery = "SELECT * FROM staff ";
$resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
?>
<div class="col-12 py-3"></div>
<div class="col-12 pt-5 px-2">
    <p class="bg-dark py-2 text-white"><i id="arrow" class="fa fa-fw fa-users text-light pe-4 ps-2"></i> View Staff</p>
    <div class="col-sm-12">
        <input type="text" class="form-control mb-2" id="search" placeholder="Search Staff" onkeyup="Search()">
    </div>
</div>
<div class="col-12 d-flex justify-content-center align-content-center ">
    <div class="col-12 px-2 ">
        <table id="data" class="table  table-hover">
            <thead class="table-dark">
                <tr>
                    <th>NIC</th>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="tb_data">
                <?php while ($data_list = mysqli_fetch_assoc($resultSet)) { ?>
                    <tr id="<?php echo $data_list['nic']; ?>">
                        <td><?php echo $data_list['nic']; ?></td>
                        <td><?php echo $data_list['name']; ?></td>
                        <td><?php echo $data_list['contact_num']; ?></td>
                        <td><?php echo $data_list['address']; ?></td>
                        <td><?php echo $data_list['email']; ?></td>
                        <td><?php echo $data_list['password']; ?></td>
                        <td>
                           <a href="home.php?edit_staff=<?php echo $data_list['nic']; ?>">

                                <i class="fa fa-pencil"> </i> Edit

                            </a>

                        </td>
                        
                        <td>
                           <a href="home.php?delete_staff=<?php echo $data_list['nic']; ?>">

                                <i class="fa fa-trash-o"> </i> Delete

                            </a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="search.js"></script>