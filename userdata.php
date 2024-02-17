<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .card{
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            border-radius: 10px;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion pt-3" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="index.html">
                <div class="sidebar-brand-text mx-3">TUP LIBRARY - BAGGAGE AREA KIOSK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="register_admin.php">
                    <i class="fas fa-users"></i>
                    <span>Register</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="readrfid.php">
                    <i class="fas fa-trophy"></i>
                    <span>Read RFID</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="editinfo.php">
                    <i class="fas fa-check"></i>

                    <span>Edit Card Info</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="userdata.php">
                    <i class="fas fa-users"></i>
                    <span>User Data</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="members.php">
                    <i class="fas fa-users"></i>
                    <span>Members</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">

                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-5">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>

                    <!-- DataTales Example -->

                    <div class="card  mb-4 p-5">
                        <h1 class="text-dark">STUDENTS LIST</h1>
                        <div class="card-body">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter search query"
                                        name="query1"
                                        value="<?php echo isset($_GET['query1']) ? $_GET['query1'] : ''; ?>"
                                        id="search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <?php
                                include_once('connection.php');

                                $sql = "SELECT * FROM registered_users";
                                if (isset($_GET['query1'])) {
                                    $search_query = htmlspecialchars($_GET['query1']);
                                    $sql .= " WHERE id LIKE '%$search_query%' OR rfid LIKE '%$search_query%' OR tupid LIKE '%$search_query%' OR name LIKE '%$search_query%' OR gender LIKE '%$search_query%' OR course LIKE '%$search_query%' OR college LIKE '%$search_query%'";
                                }

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table class="table table-striped table-hover" id="myTable">
                        <thead>
                            <tr class="bg-gradient-primary text-light text-center">
                                <th> ID</th>
                                <th>Card ID</th>
                                <th>TUP ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>College</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';

                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['rfid']}</td>
                            <td>{$row['tupid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['course']}</td>
                            <td>{$row['college']}</td>
                            <td class='d-flex'>
                                <a href='edit.php?id={$row['rfid']}' class='btn btn-warning text-dark btn-sm m-2'><i class='fas fa-edit'></i></a>
                                <a href='delete.php?id={$row['rfid']}' class='btn btn-danger btn-sm m-2' onclick='return confirm(\"Are you sure you want to delete this record?\");'><i class='fas fa-trash-alt'></i></a>
                            </td>
                        </tr>";
                                    }

                                    echo '</tbody></table>';
                                    $num_rows = $result->num_rows;
                                    echo "<p class='text-primary'><b>Total: $num_rows</b></p>";
                                } else {
                                    echo "<p>No results found</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                    <div class="card  p-5 mb-4">
                        <h1 class="text-dark">STUDENTS LOGS</h1>
                        <div class="card-body">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter search term"
                                        id="searchInput" name="query"
                                        value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            include_once('connection.php');

                            $sql = "SELECT * FROM students_logs";

                            if (isset($_GET['query'])) {
                                $search_query = htmlspecialchars($_GET['query']);
                                $sql .= " WHERE id LIKE '$search_query' OR rfid LIKE '$search_query' OR tupid LIKE '$search_query' OR name LIKE '%$search_query%' OR gender LIKE '$search_query' OR course LIKE '$search_query' OR college LIKE '$search_query' OR created_at LIKE '$search_query' OR status LIKE '$search_query'";
                            }

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo '<table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-success text-light text-center">
                        <th>ID</th>
                        <th>Card ID</th>
                        <th>TUP ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>';

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['rfid']}</td>
                        <td>{$row['tupid']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['created_at']}</td>
                        <td>{$row['status']}</td>
                    </tr>";
                                }

                                echo '</tbody></table>';
                                $num_rows = $result->num_rows;
                                echo "<p class='text-success'><b>Total: $num_rows</b></p>";
                            } else {
                                echo "<p>No results found</p>";
                            }
                            ?>
                        </div>
                    </div>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Clear input box on page reload
            window.addEventListener('DOMContentLoaded', function () {
                document.getElementById('searchInput').value = '';
                document.getElementById('search').value = '';
            });
        </script>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>