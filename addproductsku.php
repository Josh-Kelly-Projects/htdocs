<?php

// Check if product ID is set in the URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST superglobal
    $concentration = $_POST["concentration"];
    $skudescription = $_POST["skudescription"];
    $productid = $_POST["productid"];
    $cost = $_POST["cost"];

} else {
    // Redirect if feilds not set
    header("Location: error.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="Styles/Stylesheet.css">
    <title>biodx eccommerse product</title>
</head>

<body>

    <h1>
        <label>Product SKU Added</label>
    </h1>

    <?php include 'navbar.php'; ?>
    <?php
    echo "<p>concentration: $concentration</p>";
    echo "<p>description: $skudescription</p>";
    echo "<p>product id: $productid</p>";
    echo "<p>cost per ton: $cost</p>";
    /*
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

    // Cancel the order
    $sql = "INSERT INTO `productskus` (`skuid`, `concentration`, `description`, `productid`, `costperton`) VALUES (NULL, '6%', 'THis is just a test again', '2', '40000');";
    $conn->query($sql);



    // Close the database connection
    $conn->close();
*/

    ?>

    <?php include 'footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>