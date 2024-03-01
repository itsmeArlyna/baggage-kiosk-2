<?php
include_once('connection.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $stmt = $conn->prepare("SELECT id, username, password FROM registered_admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if ($password === $user['password']) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            echo '<script>
                    alert("Incorrect password.");
                    window.location.href = "login_page.php";
                  </script>';
            exit();
        }
    } else {
        echo '<script>
                alert("User not found.");
                window.location.href = "login_page.php";
              </script>';
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
