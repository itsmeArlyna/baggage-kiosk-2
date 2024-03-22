<?php
include_once('connection.php');

$serialPort = 'COM4'; 
$baudRate = 9600; 

if (isset($_POST['save'])) {
    $rfid = $_POST['rfid'];

    if(isRecentlyUsed($conn, $rfid, 10)) { 
        header("Location: user_main_interface.php");
        exit();
    }

    $check_stmt = $conn->prepare("SELECT * FROM registered_users WHERE rfid = ?");
    if ($check_stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $check_stmt->bind_param("s", $rfid);
    if ($check_stmt->execute() === false) {
        die("Error executing statement: " . $check_stmt->error);
    }

    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $status = get_next_status($conn, $rfid);
    
        if ($row) {
            $insert_stmt = $conn->prepare("INSERT INTO students_logs (rfid, status, tupid, name, gender, course, college, number) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
            if ($insert_stmt === false) {
                die("Error preparing insert statement: " . $conn->error);
            }
    
            $insert_stmt->bind_param("ssssssss", $rfid, $status, $row['tupid'], $row['name'], $row['gender'], $row['course'], $row['college'], $row['number']);
            if ($insert_stmt->execute() === TRUE) {
                $command = ($status == 'in') ? '1' : '0';
                sendSerialCommand($command);
                header("Location: user_main_interface.php");
                exit();
            } else {
                echo "Error: " . $insert_stmt->error;
            }
    
            $insert_stmt->close();
        } else {
            echo "Error: Unable to fetch data from registered_users table.";
        }
    } else {
        header("Location: not_registered.php");
        exit();
    }

    $check_stmt->close();
    $conn->close();
}

$sql = "SELECT * FROM students_logs ORDER BY id DESC LIMIT 1";

$results = mysqli_query($conn, $sql);
$json_array = array();

if ($results) {
    $data = mysqli_fetch_assoc($results);
    $json_array[] = $data;
    echo json_encode($json_array);
} else {
    echo "Error: " . mysqli_error($conn);
}

function get_next_status($conn, $rfid) {
    $last_log_stmt = $conn->prepare("SELECT status FROM students_logs WHERE rfid = ? ORDER BY id DESC LIMIT 1");
    if ($last_log_stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $last_log_stmt->bind_param("s", $rfid);
    if ($last_log_stmt->execute() === false) {
        die("Error executing statement: " . $last_log_stmt->error);
    }

    $last_log_result = $last_log_stmt->get_result();

    if ($last_log_result->num_rows == 0) {
        return 'in';
    }
    $last_log = $last_log_result->fetch_assoc();
    $last_status = $last_log['status'];

    return ($last_status == 'in') ? 'out' : 'in';
}

function sendSerialCommand($command) {
    global $serialPort, $baudRate;
    $fp = fopen($serialPort, 'w');
    if (!$fp) {
        echo 'Error: Unable to open serial port. Check permissions and port availability.';
    } else {
        fwrite($fp, $command);
        fclose($fp);
    }
}

function isRecentlyUsed($conn, $rfid, $threshold_seconds) {
    $check_stmt = $conn->prepare("SELECT * FROM students_logs WHERE rfid = ? AND timestamp > DATE_SUB(NOW(), INTERVAL ? SECOND)");
    if ($check_stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $check_stmt->bind_param("si", $rfid, $threshold_seconds);
    if ($check_stmt->execute() === false) {
        die("Error executing statement: " . $check_stmt->error);
    }

    $result = $check_stmt->get_result();

    return ($result->num_rows > 0);
}
?>
