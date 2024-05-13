<?php

date_default_timezone_set('Asia/Shanghai');

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["bag_tag_id"])) {
    $bagTagId = mysqli_real_escape_string($conn, $_POST["bag_tag_id"]);

    // Attempt to start a transaction
    $conn->begin_transaction();

    try {
        $sql_check = "SELECT id_number FROM bag_tag_number WHERE bag_tag_id = ?";
        $stmt_check = $conn->prepare($sql_check);
        if ($stmt_check === false) {
            throw new Exception("Error preparing the statement: " . $conn->error);
        }

        // Bind parameters and execute
        $stmt_check->bind_param("s", $bagTagId);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();
        $row = $result_check->fetch_assoc();
        if (!$row) {
            throw new Exception("Bag tag ID not found in bag_tag_number table.");
        }
        $idNumber = $row['id_number'];

        // Check if bag_tag_id already exists in registered_tags table and retrieve its most recent status
        $sql_registered = "SELECT status FROM registered_tags WHERE bag_tag_id = ? ORDER BY timestamp DESC LIMIT 1";
        $stmt_registered = $conn->prepare($sql_registered);
        if ($stmt_registered === false) {
            throw new Exception("Error preparing the statement: " . $conn->error);
        }

        // Bind parameters and execute
        $stmt_registered->bind_param("s", $bagTagId);
        $stmt_registered->execute();
        $result_registered = $stmt_registered->get_result();
        $currentStatus = $result_registered->fetch_assoc();

        // Determine new status
        $newStatus = ($result_registered->num_rows > 0 && $currentStatus['status'] === 'in') ? 'out' : 'in';

        // Insert new record with determined status
        $sql_insert = "INSERT INTO registered_tags (bag_tag_id, id_number, status) VALUES (?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        if ($stmt_insert === false) {
            throw new Exception("Error preparing the insert statement: " . $conn->error);
        }

        // Bind parameters and execute
        $stmt_insert->bind_param("sss", $bagTagId, $idNumber, $newStatus);
        $stmt_insert->execute();

        // Commit transaction
        $conn->commit();

        // Redirect after successful update
        header('Location: try.php');
        exit();

    } catch (Exception $e) {
        // An error occurred, rollback the transaction
        $conn->rollback();

        // Handle error
        echo "Error: " . $e->getMessage(); // Modify as needed
    }

    // Close statements if opened
    if (isset($stmt_check)) {
        $stmt_check->close();
    }
    if (isset($stmt_registered)) {
        $stmt_registered->close();
    }
    if (isset($stmt_insert)) {
        $stmt_insert->close();
    }
} else {
    // No data submitted
    echo "No data submitted"; // Modify as needed
}

// Close database connection
$conn->close();
?>
