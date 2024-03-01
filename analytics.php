<?php
include_once('connection.php');

$daily_sql = "SELECT DATE(timestamp) AS date, COUNT(*) AS login_count FROM students_logs WHERE status = 'in' GROUP BY date";
$daily_results = mysqli_query($conn, $daily_sql);

$daily_labels = [];
$daily_data = [];
while ($row = mysqli_fetch_assoc($daily_results)) {
    $daily_labels[] = $row['date'];
    $daily_data[] = $row['login_count'];
}

$college_sql = "SELECT college, COUNT(*) AS login_count FROM students_logs WHERE status = 'in' GROUP BY college";
$college_results = mysqli_query($conn, $college_sql);

$college_labels = [];
$college_data = [];
while ($row = mysqli_fetch_assoc($college_results)) {
    $college_labels[] = $row['college'];
    $college_data[] = $row['login_count'];
}

$response = [
    'daily' => [
        'labels' => $daily_labels,
        'data' => $daily_data
    ],
    'college' => [
        'labels' => $college_labels,
        'data' => $college_data
    ]
];

echo json_encode($response);
?>
