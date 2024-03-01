<?php
$conn = new mysqli("localhost", "root", "", "baggage_kiosk_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>
