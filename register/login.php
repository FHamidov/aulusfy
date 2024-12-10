<?php
session_start();

if (isset($_SESSION['username'])) {
    echo '<script>window.location.href = "http://localhost/aulusfy/";</script>';
    exit();
}

$hostname = "localhost";
$username = "root";
$password = "";
$database = "aulusfy";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $entered_username, $entered_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $entered_username;
        $_SESSION['password'] = $entered_password;
        echo '<script>window.location.href = "http://localhost/aulusfy";</script>';
    } else {
        $error_message = "Incorrect username or password";
        header("Location: index.php?error-login");
        exit();
    }
    
    $stmt->close();
}

$conn->close();
?>
