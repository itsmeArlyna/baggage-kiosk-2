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

    <title>Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
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
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?php
                include_once 'navbar.php';
                ?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                REGISTERED LIBRARY VISITORS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                include_once('connection.php');

                                                $sql = "SELECT COUNT(*) AS total_users FROM registered_users";

                                                $result = $conn->query($sql);

                                                if ($result) {
                                                    $row = $result->fetch_assoc();

                                                    echo $row['total_users'];

                                                    $result->free();
                                                } else {
                                                    echo "Error: " . $conn->error;
                                                }

                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                AVERAGE LIBRARY VISITOR PER DAY</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                include_once('connection.php');

                                                $sql = "SELECT COUNT(*) AS total_users FROM students_logs";

                                                $result = $conn->query($sql);

                                                if ($result) {
                                                    $row = $result->fetch_assoc();

                                                    $totalUsers = $row['total_users'];

                                                    $startDate = strtotime('2022-01-01');
                                                    $currentDate = strtotime(date('Y-m-d'));
                                                    $daysSinceStart = ($currentDate - $startDate) / (60 * 60 * 24);

                                                    $averageUsersPerDay = ceil($totalUsers / $daysSinceStart);

                                                    echo "<p>" . round($averageUsersPerDay, 2) . '%' . "</p>";

                                                    // Free result set
                                                    $result->free();
                                                } else {
                                                    echo "Error: " . $conn->error;
                                                }

                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">AVERAGE
                                                LIBRARY VISITOR PER MONTH
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php
                                                        include_once('connection.php');

                                                        // SQL query to count the total number of registered users
                                                        $sql = "SELECT COUNT(*) AS total_users FROM students_logs";

                                                        // Execute the query
                                                        $result = $conn->query($sql);

                                                        if ($result) {
                                                            // Fetch the result as an associative array
                                                            $row = $result->fetch_assoc();

                                                            // Get the total number of registered users
                                                            $totalUsers = $row['total_users'];

                                                            // Calculate the number of months since the application started collecting data
                                                            $startDate = strtotime('2022-01-01'); // Replace this with your actual start date
                                                            $currentDate = strtotime(date('Y-m-d'));
                                                            $monthsSinceStart = (($currentDate - $startDate) / (60 * 60 * 24 * 30)); // Convert seconds to months
                                                        
                                                            // Calculate the average users per month
                                                            $averageUsersPerMonth = $totalUsers / $monthsSinceStart;

                                                            // Output the average users per month
                                                            echo "<p>" . round($averageUsersPerMonth, 2) . "</p>";

                                                            // Free result set
                                                            $result->free();
                                                        } else {
                                                            // Handle the case where the query fails
                                                            echo "Error: " . $conn->error;
                                                        }

                                                        // Close the database connection
                                                        $conn->close();
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">LIBRARY VISITOR OVERVIEW</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="dailyChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header  d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">MAJORITY OF LIBRARY VISITORS FROM
                                        DIFFRENT COLLEGES </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pb-2">
                                        <canvas id="collegeChart" width="400" height="350"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Development of Security System for Baggage Counter of the Technological
                            University of the Philippines-Manila Library (2024)</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        // Fetch data from PHP script
        fetch('analytics.php')
            .then(response => response.json())
            .then(data => {
                var dailyCtx = document.getElementById('dailyChart').getContext('2d');
                var dailyChart = new Chart(dailyCtx, {
                    type: 'line',
                    data: {
                        labels: data.daily.labels,
                        datasets: [{
                            label: 'Daily Login Count',
                            data: data.daily.data,
                            fill: false,
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

                var collegeCtx = document.getElementById('collegeChart').getContext('2d');
                var collegeChart = new Chart(collegeCtx, {
                    type: 'pie',
                    data: {
                        labels: data.college.labels,
                        datasets: [{
                            label: 'College-wise Login Distribution',
                            data: data.college.data,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: ''
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    var dataset = data.datasets[tooltipItem.datasetIndex];
                                    var total = dataset.data.reduce(function (previousValue, currentValue, currentIndex, array) {
                                        return previousValue + currentValue;
                                    });
                                    var currentValue = dataset.data[tooltipItem.index];
                                    var percentage = ((currentValue / total) * 100).toFixed(2); 
                                    return percentage + "%";
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>

</html>