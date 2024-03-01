<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header("Location: login_page.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'navItems.php'; ?>

<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion pt-3" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="index.php">
        <div class="sidebar-brand-text mx-3 ">TUP LIBRARY - BAGGAGE AREA KIOSK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php foreach ($navItems as $item): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $item['href'] ?>">
                <i class="<?= $item['icon'] ?>"></i>
                <span>
                    <?= $item['text'] ?>
                </span>
            </a>
        </li>
        <hr class="sidebar-divider">
    <?php endforeach; ?>

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
                <?php 
include_once 'navbar.php'; 
?>

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <h1 class="h3 mb-3 text-gray-800 text-center">Register another Admin</h1>
                            <h1 class="text-center mt-0"></h1>
                            <form action="insert_admin.php" method="post">
                            <div class="form-row" id="student_logs">
                                <div class="form-group col-md-6">
                                    <label for="input_card_id">Card ID</label>
                                    <input type="text" class="form-control" id="input_card_id" name="rfid"
                                        placeholder="Place your id on the card reader" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_tup_id">TUP ID</label>
                                    <input type="text" class="form-control" id="input_tup_id" name="tupid"
                                        placeholder="Enter your Student ID" pattern="TUPM-\d{2}-\d{4}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_student_name">Name</label>
                                    <input type="text" class="form-control" id="input_student_name"
                                        name="name" placeholder="Enter Full name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_student_gender">Gender</label>
                                    <select id="input_student_gender" name="gender" class="form-control">
                                        <option selected disabled value="">Choose Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                   <input type="text" class="form-control" name="password" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="justify-content-center d-flex text-center">
                                <button class="btn btn-primary mt-2" id="registerButton" type="submit"
                                    name="register">
                                    <b>R E G I S T E R !</b>
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                <!-- /.container-fluid -->
    
            </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy;  Development of Security System for Baggage Counter of the Technological University of the Philippines-Manila Library (2024)</span>
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
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>