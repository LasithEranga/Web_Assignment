
<?php
include("db.php");
$sqlQuery = "SELECT d.donarName, d.contactNo , DATE(d.date) as date, TRUNCATE(SUM(n.amount),2) as amount FROM donars d, donations n GROUP BY d.donarName; ";
$resultSet = mysqli_query($Con, $sqlQuery) or die("database error:" . mysqli_error($Con));
$sqlQuery = "SELECT TRUNCATE(SUM(amount),2) as amount FROM donations;";
$donation = mysqli_query($Con,$sqlQuery);
$sqlQuery = "SELECT COUNT(nic) as nic FROM staff;";
$staff = mysqli_query($Con,$sqlQuery);
$sqlQuery = "SELECT COUNT(id) as id FROM child_details;";
$children = mysqli_query($Con,$sqlQuery);
$sqlQuery = "SELECT COUNT(nic) as nic FROM labour_details;";
$labour = mysqli_query($Con,$sqlQuery);
?>

<div class="col-12 py-3"></div>
    <div class="col-md-12 col-12 justify-content-center align-items-center d-flex">
        <div class="col-md-11 ">
            <h1 class="ps-4 pt-4">Overview</h1>
            <hr>
            <div class="d-flex row col-12 justify-content-center align-items-center ">
                <div class="card m-2 py-2  bg-blue text-light" style="width: 15rem;">
                    <div class="card-body ">
                        <div class="d-flex ">
                            <i class="fa fa-money fa-4x"></i>
                            <p class="card-title ps-4  text-end">Total Donations<br>RS:<?php if($result = mysqli_fetch_assoc($donation)){
                                    echo $result['amount'];
                            }?></p>
                        </div>
                        <div class="">
                            <p class="mt-3 text-primary"><a href="home.php?view_donation">View Details >></a></p>
                        </div>
                    </div>
                </div>

                <div class="card m-2 bg-blue text-light" style="width: 15rem;">
                    <div class="card-body ">
                        <div class="d-flex ">
                            <i class="fa fa-child fa-5x fa-4x"></i>
                            <p class="card-title ps-5  text-end">Children Details<br><span class="fs-2"><?php if($result = mysqli_fetch_assoc($children)){
                                    echo $result['id'];
                            }?></span></p>
                        </div>
                        <div class="">
                            <p class="mt-1 text-primary"><a href="home.php?view_child">View Details >></a></p>
                        </div>
                    </div>
                </div>
                

                <div class="card m-2 bg-blue text-white" style="width: 15rem;">
                    <div class="card-body ">
                        <div class="d-flex ">
                            <i class="fa fa-user fa-4x "></i>
                            <p class="card-title ps-5 ms-4 text-end">Staff Details<br><span class="fs-2"><?php if($result = mysqli_fetch_assoc($staff)){
                                    echo $result['nic'];
                            }?></span></p>
                        </div>
                        <div class="">
                            <p class="mt-1 text-primary"><a href="home.php?view_staff">View Details >></a></p>
                        </div>
                    </div>
                </div>

                <div class="card m-2 bg-blue text-white" style="width: 15rem;">
                    <div class="card-body ">
                        <div class="d-flex ">
                            <i class="fa fa-male fa-5x"></i>
                            <p class="card-title ps-5 ms-5 text-end">Labour Details<br><span class="fs-2"><?php if($result = mysqli_fetch_assoc($labour)){
                                    echo $result['nic'];
                            }?></span></p>
                        </div>
                        <div class="">
                            <p class="mt-1 text-primary"><a href="home.php?view_staff">View Details >></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end cards -->

            <div class="col-12  mt-5 ">
                <table id="data" class="table  table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Donar Name</th>
                            <th>Fund Amount</th>
                            <th>Contact Number</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody class="tb_data">
                        <?php while ($developer = mysqli_fetch_assoc($resultSet)) { ?>
                        <tr >
                            <td>
                                <?php echo $developer['donarName']; ?>
                            </td>
                            <td>
                                <?php echo $developer['amount']; ?>
                            </td>
                            <td>
                                <?php echo $developer['contactNo']; ?>
                            </td>
                            <td>
                                <?php echo $developer['date']; ?>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- End Chart Area -->

            <canvas id="myChart" width="400" height="150"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['April', 'May', 'June', 'July', 'Aug', 'Sept'],
                        datasets: [{
                            label: 'Donations',
                            data: [12, 19, 3, 5, 2, 3, 5],
                            backgroundColor: [
                                'rgba(0, 122, 204, 0.5)',
                            ],
                            
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

        </div>
    </div>