<?php
include("db.php");
$sqlQuery = "SELECT * FROM child_details ";
$resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
?>
<div class="col-12 py-3"></div>
<div class="col-12 pt-5 px-2">
    <p class="bg-dark py-2 text-white"><i class="fa fa-fw fa-male"></i> View Child </p>
    <div class="col-sm-12">
        <input type="text" class="form-control mb-2" id="search" placeholder="Search Child" onkeyup="Search()">
    </div>
</div>
<div class="col-12 d-flex justify-content-center align-content-center ">
    <div class="col-12 px-2 ">
        <table id="data" class="table  table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name with Initials</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="tb_data">
                <?php while ($developer = mysqli_fetch_assoc($resultSet)) { ?>
                    <tr id="<?php echo $developer['id']; ?>">
                        <td><?php echo $developer['id']; ?></td>
                        <td><?php echo $developer['name_initials']; ?></td>
                        <td><?php echo $developer['full_name']; ?></td>
                        <td><?php echo $developer['gender']; ?></td>
                        <td><?php echo $developer['dob']; ?></td>
                        <td>
                           <a href="home.php?edit_child=<?php echo $developer['id']; ?>">

                                <i class="fa fa-pencil"> </i> Edit

                            </a>

                        </td>
                        
                        <td>
                           <a href="home.php?delete_child=<?php echo $developer['id']; ?>">

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