<?php

$connect = mysqli_connect ('localhost', 'root', '', 'kiosk_baggage_area');

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>