<?php
include_once('connection.php');

$gender_sql = "SELECT gender, COUNT(*) AS gender_count FROM students_logs WHERE status = 'in' GROUP BY gender";
$gender_results = mysqli_query($conn, $gender_sql);

$gender_counts = [];
$total_count = 0;

while ($row = mysqli_fetch_assoc($gender_results)) {
    $gender_counts[$row['gender']] = $row['gender_count'];
    $total_count += $row['gender_count'];
}

$percentages = [];
foreach ($gender_counts as $gender => $count) {
    $percentage = ($count / $total_count) * 100;
    $formatted_percentage = number_format($percentage, 2); 
    $percentages[$gender] = $formatted_percentage;
}

 
$labels = array_keys($percentages);
$data = array_values($percentages);

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

<body>

    <div class="chart-pie pb-2">
        <canvas id="genderPieChart" width="400" height="350"></canvas>
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
        var ctx = document.getElementById('genderPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                    ],
                    borderColor: [
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
                }
            }
        });
    </script>
</body>

</html>