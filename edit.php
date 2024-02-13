<?php
include_once('connection.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $cardId = $_GET['id'];

    $sql = "SELECT * FROM students WHERE card_id = '$cardId'";
    $result = $connect->query($sql); // Use $connect instead of $conn

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Edit Record: <br>";
        echo "Card ID: " . $row['card_id'] . "<br>";
        echo "TUP ID: " . $row['tup_id'] . "<br>";
        echo "Name: " . $row['student_name'] . "<br>";
    } else {
        echo "Record not found";
    }
} else {
    echo "Invalid or missing 'id' parameter";
}

$connect->close(); // Close the connection
?>
