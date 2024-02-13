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

if (isset($_POST['submit'])) {
    $card_id = $_POST['input_card_id'];
    $tup_id = $_POST['input_tup_id'];
    $admin_name = $_POST['input_admin_name'];
    $admin_gender = $_POST['input_admin_gender'];
    $admin_email = $_POST['input_admin_email'];
    $admin_mobile = $_POST['input_admin_mobile'];
    $admin_username = $_POST['input_admin_username'];
    $admin_password = $_POST['input_admin_password'];

    $sql = "INSERT INTO administrator (card_id, tup_id, admin_name, admin_gender, admin_email, admin_mobile, admin_username, admin_password) VALUES ('$card_id', '$tup_id', '$admin_name','$admin_gender', '$admin_email', '$admin_mobile','$admin_username','$admin_password')";

    if ($connect->query($sql) === TRUE) {
        // Close the database connection before showing SweetAlert
        $connect->close();

        // Use SweetAlert for a more visually appealing alert
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
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>
</body>
</html>
