<?php
echo"the good one is running";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $sqlusername = "root";
    $sqlpassword = "";
    $database = "biodxdb";

    // Create connection
    $conn = new mysqli($servername, $sqlusername, $sqlpassword, $database);

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

    if ($result) {
        // Check if user exists
        if ($result->num_rows == 0) {
            echo"and the if still works";
            // User doesn't exist, register the user
            $sql = "INSERT INTO `users` (`username`, `password`, `employee`) VALUES ('$username', '$password', '0');";
            $conn->query($sql);

            header("Location: home.php"); // Redirect to dashboard as user is not employee
            exit(); // Stop script execution after redirection


        } else {
            // User doesn't exist or invalid credentials
            echo "this user already exists";
        }
    } else {
        // Error in query execution
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>