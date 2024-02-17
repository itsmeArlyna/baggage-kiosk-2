<?php
include_once('connection.php');

if (isset($_POST['register'])) {
    $rfid = mysqli_real_escape_string($conn, $_POST['rfid']);
    $tupid = mysqli_real_escape_string($conn, $_POST['tupid']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $college = mysqli_real_escape_string($conn, $_POST['college']);

    $stmt = $conn->prepare("INSERT INTO registered_users (rfid, tupid, name, gender, course, college) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $rfid, $tupid, $name, $gender, $course, $college);

    if ($stmt->execute() === TRUE) {
        header("Location: registration_success.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

$rfid = $_POST['rfid'];

$sql = "SELECT * FROM registered_users WHERE rfid = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $rfid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode([$row]);
} else {
    echo json_encode([]);
}
?>
