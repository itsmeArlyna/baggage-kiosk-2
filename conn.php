<?php
$host = '192.168.100.104'; // Replace with the IP address of your database server
$user = 'root';
$pass = '';
$db = 'baggage_kiosk_db';
$charset = 'utf8mb4';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Simple query to test the connection
if ($result = $conn->query("SELECT 1")) {
    $result->free();
} else {
    echo " - Query execution failed";
}

// $conn->close(); // Commented out so connection remains open for subsequent operations
?>
