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

    <title>Users data</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .card {
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            border-radius: 10px;
        }
    </style>
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

                <?php
                include_once 'navbar.php';
                ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>

                    <!-- DataTales Example -->

                    <div class="card  mb-4 p-5">
                        <h1 class="text-dark">REGISTERED STUDENTS LIST</h1>
                       
                                <a href="registered_users.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Registered Users Report</a>
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
                        <form id="reportForm" action="student_logs_list.php" method="get" style="display: inline;">
    <div class="input-group">
        <input type="date" class="form-control" name="start_date" id="startDate" required>
        <input type="date" class="form-control" name="end_date" id="endDate" required>
        <button type="submit" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </button>
    </div>
</form>

<script>
    document.getElementById('reportForm').addEventListener('submit', function() {
        var startDate = document.getElementById('startDate').value;
        var endDate = document.getElementById('endDate').value;

        // Validate date range (optional)
        if (startDate > endDate) {
            alert('End date must be after start date');
            return false; // Prevent form submission
        }

        // Construct URL with date parameters
        var url = 'student_logs_list.php?start_date=' + startDate + '&end_date=' + endDate;
        this.action = url; // Set form action to include date parameters
        return true; // Allow form submission
    });
</script>

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
                                $sql .= " WHERE id LIKE '$search_query' OR rfid LIKE '$search_query' OR tupid LIKE '$search_query' OR name LIKE '%$search_query%' OR gender LIKE '$search_query' OR course LIKE '$search_query' OR college LIKE '$search_query' OR timestamp LIKE '$search_query' OR status LIKE '$search_query'";
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
                                    <td>{$row['timestamp']}</td>
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
                    <div class="card  p-5 mb-4">
                        <h1 class="text-dark">STUDENTS LOGS WITH BAG TAGS</h1>
                        <div class="card-body">
                            
                            <?php
                            include_once('connection.php');

                            $sql = "SELECT * FROM user_bag_log";
                            $stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    ?>
    <table class="table table-striped table-hover ">
        <thead class="bg-warning text-dark">
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Bag Tag ID</th>
                <th>Tag Number</th>
                <th>Log Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?=$row['number']?></td>
                    <td><?= $row['bag_tag_number'] ?></td>
                    <td><?= $row['id_number'] ?></td>
                    <td><?= $row['log_timestamp'] ?></td>
                    <td><?= $row['status'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    mysqli_free_result($result);
} else {
    echo '<p>No records found</p>';
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
                            <span>Copyright &copy;  Development of Security System for Baggage Counter of the Technological University of the Philippines-Manila Library (2024)</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

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