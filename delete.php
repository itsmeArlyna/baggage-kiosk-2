<?php
include_once('connection.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $cardId = $_GET['id'];

    $sql = "DELETE FROM students WHERE card_id = '$cardId'";

    if ($connect->query($sql) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
} else {
    echo "Invalid or missing 'id' parameter";
}

$conn->close();
?>
