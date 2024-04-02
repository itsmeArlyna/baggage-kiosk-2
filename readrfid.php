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

    <title>Read Rfid</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <div class="container-fluid ">
                    <div class="card shadow m-4 p-5">
                    <h2 class="text-center">RFID Data</h2>
                        <p class="text-center">Place your ID on the card reader </p>
                        <p class="text-center" style="opacity:0.5; color:red;">*Just tap again your ID if you think that it's already registered</p>
                        
                        <div style="opacity:0;">
                            <input type="text" id="rfidInput" placeholder="Enter RFID" autocomplete="off">
                            <button id="submitButton" onclick="getData()">Get Data</button>
                        </div>
                        <div id="result"></div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <script>
              function focusInput() {
            document.getElementById("rfidInput").focus();
        }
        focusInput();

        $(document).ready(function() {
            // Get references to the input and button
            const rfidInput = document.getElementById('rfidInput');
            const submitButton = document.getElementById('submitButton');

            // Function to trigger click event on the button
            function triggerButtonClick() {
                submitButton.click();
            }

            // Add event listener to input field
            rfidInput.addEventListener('input', function() {
                if (this.value.trim() !== '') {
                    triggerButtonClick();
                }
            });
        });

        function getData() {
            var rfid = document.getElementById("rfidInput").value;
            // Check if RFID is not empty
            if (rfid.trim() !== '') {
                $.ajax({
                    url: 'http://localhost/baggage-kiosk-2/save_registration.php',
                    type: 'POST',
                    data: {rfid: rfid},
                    dataType: 'json',
                    success: function(response) {
                        if(response.length > 0) {
                            var data = response[0];
                            $('#result').html(
                                '<p>Card ID: ' + data.rfid + '</p><p>TUP ID: ' + data.tupid + '</p> <p>Name: ' + data.name + '</p><p> Gender: ' + data.gender + '</p> <p>Course: ' + data.course + '</p> <p>College: ' + data.college + '</p><p>Registration date: ' + data.registration_date+ '</p>'
                            );
                            // Clear the input field
                            $('#rfidInput').val('');
                        } else {
                            $('#result').html('<p>No data found for this RFID.</p>');
                            // Clear the input field
                            $('#rfidInput').val('');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        }
                </script>
            </div>
            <!-- End of Main Content -->

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
    
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>