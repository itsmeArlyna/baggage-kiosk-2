<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    
    <!-- Include SweetAlert from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
include_once('connection.php');

if (isset($_POST['register'])) {
    $rfid = mysqli_real_escape_string($conn, $_POST['rfid']);
    $tupid = mysqli_real_escape_string($conn, $_POST['tupid']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $stmt = $conn->prepare("INSERT INTO registered_admin (card_id, tup_id, name, gender, username, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $rfid, $tupid, $name, $gender, $username, $password);

    if ($stmt->execute() === TRUE) {
        echo '<script>
            Swal.fire({
                title: "Administrator added successfully!",
                icon: "success",
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location.href = "index.php";
            });
        </script>';
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
