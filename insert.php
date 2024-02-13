
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
    $stmt = $connect->prepare("INSERT INTO students (card_id, tup_id, student_name, student_gender, student_course, student_college, student_email, student_mobile, student_status) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'ACTIVE')");

    $stmt->bind_param("ssssssss", $card_id, $tup_id, $student_name, $student_gender, $student_course, $student_college, $student_email, $student_mobile);

    $card_id = $_POST['input_card_id'];
    $tup_id = $_POST['input_tup_id'];
    $student_name = $_POST['input_student_name'];
    $student_gender = $_POST['input_student_gender'];
    $student_course = $_POST['input_student_course'];
    $student_college = $_POST['input_student_college'];
    $student_email = $_POST['input_student_email'];
    $student_mobile = $_POST['input_student_mobile'];

    if ($stmt->execute()) {
        // Close the prepared statement before redirecting
        $stmt->close();
        $connect->close();

        // Use SweetAlert for a more visually appealing alert
        echo '<script>
            Swal.fire({
                title: "Submission successful!",
                icon: "success",
                showConfirmButton: false,
                timer: 1500
            });
        </script>';
        
        // Redirect to user_main_interface.php after a short delay
        echo '<script>
            setTimeout(function() {
                window.location.href = "user_main_interface.php";
            }, 1500);
        </script>';
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
    $connect->close();
}
?>
</body>
</html>
