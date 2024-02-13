<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Add SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Dashboard</title>

    <style>
        a {
            text-decoration: none;
            color: rgb(255, 254, 254);
            font-weight: bold;
        }

        li {
            list-style: none;
            border-right: 1px solid white;
            padding: 0% 2%;
            font-weight: 700;
        }

        li a:hover {
            color: aqua;
            text-decoration: none;
        }

        #nav {
            margin: 2%;
            width: 100%;
            padding-top: 1%;
            background-color: rgb(0, 1, 1);
            border-radius: 0;
        }

        ul {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        #card_register {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            padding: 2%;
        }

        .section {
            width: 70%;
            display: none;
        }

        #read_rfid {
            width: 30%;
        }

        #user_data {
            display: block;
        }

        ul li.active a {
            color: #fff200;
        }

        ul li a.default {
            color: #fff200;
        }

        .card {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius: 15px;
        }

        body {
            background-color: rgba(67, 67, 67, 0.153);
        }
        h1{
            margin-top: 3%;
        }
        ol li{
            font-size: 1.5rem;
        }
        #testing{
            width: 100%;
        }
        #searchInput {
            width: 20%;
            float: right;
            margin-left: 55%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-danger bg-danger text-light">
        <span class="navbar-brand mb-0 h1">TUP LIBRARY - BAGGAGE AREA KIOSK</span>
        <a href="home.html" id="logoutLink">Log out</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="card" id="nav">
                <ul>
                    <li><a href="#user_data" class="default">USER DATA</a></li>
                    <li><a href="#register">REGISTER</a></li>
                    <li><a href="#read_rfid">READ RFID</a></li>
                    <li><a href="#download_data">DOWNLOAD DATA</a></li>
                    <li><a href="#analytics">ANALYTICS</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="section w-100 p-5" id="user_data">
            <div class="align-items-center d-flex">
            <h1 class="text-dark mt-0">STUDENTS LIST </h1>
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            </div>
            
                <?php
                include_once('connection.php');
                $sql = "SELECT * FROM students";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    echo '<table class="table table-bordered table-striped table-hover" id="myTable">
            <thead>
                <tr class="bg-primary text-light text-center">
                    <th>Card ID</th>
                    <th>TUP ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>College</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
        <td>{$row['card_id']}</td>
        <td>{$row['tup_id']}</td>
        <td>{$row['student_name']}</td>
        <td>{$row['student_gender']}</td>
        <td>{$row['student_course']}</td>
        <td>{$row['student_college']}</td>
        <td>{$row['student_email']}</td>
        <td>{$row['student_mobile']}</td>
        <td>{$row['student_status']}</td>
        <td>
            <a href='edit.php?id={$row['card_id']}' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
            <a href='delete.php?id={$row['card_id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this record?\");'><i class='fas fa-trash-alt'></i></a>
        </td>
    </tr>";
                    }

                    echo '</tbody></table>';
                } else {
                    echo "0 results";
                }


                ?>
                </tbody>
                </table>


                <h1 class="text-dark ">STUDENTS LOGIN</h1>
                <?php
                include_once('connection.php');
                $sql = "SELECT * FROM student_logs WHERE logs_status = 'in'";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    echo '<table class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-success text-light text-center">
                    <th>Log ID</th>
                    <th>Card ID</th>
                    <th>TUP ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>College</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>';

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
        <td>{$row['log_id']}</td>
        <td>{$row['card_id']}</td>
        <td>{$row['tup_id']}</td>
        <td>{$row['student_name']}</td>
        <td>{$row['student_gender']}</td>
        <td>{$row['student_course']}</td>
        <td>{$row['student_college']}</td>
        <td>{$row['log_datetime']}</td>
        <td>{$row['logs_status']}</td>
    </tr>";
                    }

                    echo '</tbody></table>';
                } else {
                    echo "0 results";
                }


                ?>
                </tbody>
                </table>

                
                <h1 class="text-dark ">STUDENTS LOGOUT</h1>
                <?php
                include_once('connection.php');
                $sql = "SELECT * FROM student_logs WHERE logs_status = 'out'";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    echo '<table class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-danger text-light text-center">
                    <th>Log ID</th>
                    <th>Card ID</th>
                    <th>TUP ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>College</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>';

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
        <td>{$row['log_id']}</td>
        <td>{$row['card_id']}</td>
        <td>{$row['tup_id']}</td>
        <td>{$row['student_name']}</td>
        <td>{$row['student_gender']}</td>
        <td>{$row['student_course']}</td>
        <td>{$row['student_college']}</td>
        <td>{$row['log_datetime']}</td>
        <td>{$row['logs_status']}</td>
    </tr>";
                    }

                    echo '</tbody></table>';
                } else {
                    echo "0 results";
                }
                ?>
                </tbody>
                </table>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-gradient-warning text-dark">
                                    <tr>
                                        <th>Winner ID</th>
                                        <th>Member ID</th>
                                        <th>Prize ID</th>
                                        <th>Winner Name</th>
                                        <th>Winner Pincode</th>
                                        <th>Winner Branch</th>
                                        <th>Draw Date</th>
                                    </tr>
                                </thead >
                                <tbody>
                                    <tr>
                                        <td>sfcgf</td>
                                        <td>rcgeg</td>
                                        <td>trgcx</td>
                                        <td>ctrg</td>
                                        <td>crtg</td>
                                        <td>ecgr</td>
                                        <td>ecg</td>
                                    </tr>
                                <tfoot class="bg-gradient-warning text-dark">
                                    <tr>
                                        <th>Winner ID</th>
                                        <th>Member ID</th>
                                        <th>Prize ID</th>
                                        <th>Winner Name</th>
                                        <th>Winner Pincode</th>
                                        <th>Winner Branch</th>
                                        <th>Draw Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="section" id="register">
                <div class="card" id="card_register">
                    <div class="card-body">
                        <h1 class="text-center mt-0">Register Another Admin</h1>
                        <form action="insert_admin.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input_card_id">Card ID</label>
                                <input type="text" class="form-control" id="input_card_id" name="input_card_id" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input_tup_id">TUP ID</label>
                                <input type="text" class="form-control" id="input_tup_id" name="input_tup_id"
                                    placeholder="Enter your TUP ID">
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                                    <label for="input_admin_name">Name</label>
                                    <input type="text" class="form-control" id="input_admin_name" name="input_admin_name"
                                        placeholder="Enter Full name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_admin_gender">Gender</label>
                                    <select id="input_admin_gender" name="input_admin_gender" class="form-control">
                                        <option selected disabled value="">Choose Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_admin_email">Email</label>
                                    <input type="email" class="form-control" id="input_admin_email" name="input_admin_email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_admin_mobile">Mobile Number</label>
                                    <input type="text" class="form-control" id="input_admin_mobile" name="input_admin_mobile"
                                        placeholder="Enter Mobile no">
                                </div>
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input_admin_username">Username</label>
                                <input type="text" class="form-control" id="input_admin_username" name="input_admin_username"
                                    placeholder="Enter username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input_admin_mobile">Password</label>
                                <input type="password" class="form-control" id="input_admin_password" name="input_admin_password"
                                    placeholder="Enter password">
                            </div>
                        </div>
                        <button class="btn btn-primary pt-2 mt-1 w-100" type="submit" name="submit">
                            <h6>Register!</h6>
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12 justify-content-center mt-5">
            <div class="section" id="read_rfid">
                <div class="card" id="testing">
                    <div class="card-header bg-primary">
                        <h5 class="text-light">USER DATA (For Testing)</h5>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li id="user_card_id"></li>
                            <li id="user_tup_id"></li>
                            <li id="user_name"></li>
                            <li id="user_gender"></li>
                            <li id="user_course"></li>
                            <li id="user_college"></li>
                            <li id="user_email"></li>
                            <li id="user_mobile"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="section" id="download_data">
                <div class="card p-3">
                    <div class="card-body justify-content-center text-center">
                        <h1 class="text-center mb-5 mt-0">DOWNLOAD DATA</h1>
                        <form>
                            <div class="form-group">
                                <label for="dateRange">Select Date Range:</label>
                                <div class="input-daterange input-group" id="dateRange">
                                    <input type="text" class="form-control" name="start" placeholder="Start Date" />
                                    <div class="input-group-prepend input-group-append">
                                        <span class="input-group-text">to</span>
                                    </div>
                                    <input type="text" class="form-control" name="end" placeholder="End Date" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-5">Submit</button>
                        </form>
                        <button class="btn btn-outline-primary">
                            <h4><i class="fas">&#xf1c2;</i> Export to Word</h4>
                        </button>
                        <button class="btn btn-outline-success">
                            <h4><i class="fas">&#xf1c3;</i> Export to Excel</h4>
                        </button>
                        <button class="btn btn-outline-danger">
                            <h4><i class="fas">&#xf1c1;</i> Export to PDF</h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="section" id="analytics">
                <div class="cards d-flex mb-5">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center">Library Visitors from different Colleges</h5>
                                <canvas id="myPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center">Library Visitors from January to May 2023</h5>
                                <canvas id="myLineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Bootstrap Datepicker JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>




        //USER DATA
        var user_card_id = document.getElementById('user_card_id');
        var user_tup_id = document.getElementById('user_tup_id');
        var user_name = document.getElementById('user_name');
        var user_gender = document.getElementById('user_gender');
        var user_course = document.getElementById('user_course');
        var user_college = document.getElementById('user_college');
        var user_email = document.getElementById('user_email');
        var user_mobile = document.getElementById('user_mobile');

        const user_data = {
            card_id: 12345678,
            student_id: "TUPM-20-0130",
            student_name: "Arlyn Seno",
            student_gender: "Female",
            student_college: "CIT",
            student_course: "BET-Cpet",
            student_email: "arlyn.seno@tup.edu.ph",
            student_mobile: 9394188314,
        };

        user_card_id.innerHTML = "CARD ID : " + user_data.card_id;
        user_tup_id.innerHTML = "TUP ID : " + user_data.student_id;
        user_name.innerHTML = "NAME : " + user_data.student_name;
        user_gender.innerHTML = "GENDER : " + user_data.student_gender;
        user_course.innerHTML = "COURSE : " + user_data.student_course;
        user_college.innerHTML = "COLLEGE : " + user_data.student_college;
        user_email.innerHTML = "EMAIL : " + user_data.student_email;
        user_mobile.innerHTML = "MOBILE : " + user_data.student_mobile;

        $(document).ready(function () {
            $('.input-daterange').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true,
                todayHighlight: true
            });
        });

        //HIDE SECTIONS
        $(document).ready(function () {
            $('ul li a').click(function (e) {
                e.preventDefault();
                $('.section').hide();

                var targetId = $(this).attr('href');
                $(targetId).show();
            });
        });


        // ACTIVE NAV
        $(document).ready(function () {
            $('ul li a.default').parent().addClass('active');
            $('#user_data').show();

            $('ul li a').click(function (e) {
                e.preventDefault();

                $('ul li').removeClass('active');

                $('ul li a.default').removeClass('default');

                $(this).parent().addClass('active');

                $('.hidden').hide();

                var targetId = $(this).attr('href');
                $(targetId).show();
            });
        });

        // Pie Chart Data
        const pieChartData = {
            labels: ['CIT', 'COE', 'CIE'],
            datasets: [{
                data: [30, 50, 20],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        };

        const pieChartCtx = document.getElementById('myPieChart').getContext('2d');
        const myPieChart = new Chart(pieChartCtx, {
            type: 'pie',
            data: pieChartData
        });

        //LINE GRAPH
        var data = {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Example Data',
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Fill color
                borderColor: 'rgba(75, 192, 192, 1)', // Line color
                borderWidth: 2,
                data: [65, 59, 80, 81, 56], // Your data points
            }]
        };

        // Configuration options
        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        // Get the canvas element
        var ctx = document.getElementById('myLineChart').getContext('2d');

        // Create the line chart
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
        document.getElementById('logoutLink').addEventListener('click', function (event) {
            // Prevent the default behavior of the link
            event.preventDefault();

            // Display the SweetAlert confirmation
            Swal.fire({
                title: 'Log Out',
                text: 'Are you sure you want to log out?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, log out'
            }).then((result) => {
                // If the user clicks "Yes, log out," redirect to the logout page
                if (result.isConfirmed) {
                    window.location.href = 'home.html';
                }
            });
        });


    document.getElementById("searchInput").addEventListener("input", function() {
        searchTable();
    });

    function searchTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;  // Break out of the loop if a match is found in any column
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }

    </script>
</body>

</html>