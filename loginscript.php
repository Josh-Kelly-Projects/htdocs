<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "biodxdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from the form if set
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    // Query to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User exists, set session variables
        $_SESSION['username'] = $username;
        header("Location: home.php"); // Redirect to dashboard
        exit(); // Stop script execution after redirection
    } else {
        // User doesn't exist or invalid credentials
        echo "Invalid username or password.";
    }

    $conn->close();
}
?>
