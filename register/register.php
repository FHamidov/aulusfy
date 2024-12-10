<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['username'])) {
    echo '<script>
                window.location.href = "http://localhost/aulusfy/";
        </script>';
    exit();
}

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'aulusfy';
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = strtolower($_POST['emailid']);
    $username = strtolower($_POST['usernameid']);
    $password = $_POST['passid'];
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username) && strlen($password) >= 8) {  
      $checkUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
      $checkUsernameResult = mysqli_query($connection, $checkUsernameQuery);

      if (mysqli_num_rows($checkUsernameResult) > 0) {
        header("Location: index.php?error-register");
        exit();

        
      } else {
          $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
          if (mysqli_query($connection, $sql)) {
            echo '<script>
                    window.location.href = "http://localhost/aulusfy/register";
                </script>';
            exit();

          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($connection);
          }
      }
  }
  else
  {
    header("Location: index.php?error-reg-cre");
    exit();

  }
    mysqli_close($connection);
}
?>