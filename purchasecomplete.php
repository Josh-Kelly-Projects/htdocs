<?php

// Check if product ID is set in the URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST superglobal
    $productskuid = $_POST["productskuid"];
    $username = $_POST["username"];
    $devdate = $_POST["devdate"];
    $ordersize = $_POST["ordersize"];
    $address = $_POST["address"];
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
    <title>biodx eccommerse checkout</title>
</head>

<body>

    <?php include 'navbar.php';

    // Database configuration
    $servername = "localhost";
    $sqlusername = "root";
    $password = "";
    $database = "biodxdb";

    // Create connection
    $conn = new mysqli($servername, $sqlusername, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch product data from the database this is just to make the page have the infor of the product that was just purchased on it
    $sql = "SELECT concentration, costperton, productid FROM productskus WHERE skuid = '$productskuid'";
    $result = $conn->query($sql);
    if ($result) {
        // Fetch the data row by row
        if ($result->num_rows > 0) {
            // Fetch associative array
            while ($row = $result->fetch_assoc()) {
                // Store each column value into variables
                $concentration = $row['concentration'];
                $costperton = $row['costperton'];
                $productid = $row['productid'];
            }
        } else {
            // No results found
            echo "No results found";
        }
    } else {
        // Query execution failed
        echo "Error: " . $conn->error;
    }
    //do it agin to get the product info
    $sql = "SELECT name FROM products WHERE productid = '$productid'";
    $result = $conn->query($sql);
    if ($result) {
        // Fetch the data row by row
        if ($result->num_rows > 0) {
            // Fetch associative array
            while ($row = $result->fetch_assoc()) {
                // Store each column value into variables
                $productname = $row['name'];
            }
        } else {
            // No results found
            echo "No results found";
        }
    } else {
        // Query execution failed
        echo "Error: " . $conn->error;
    }

    //now we calculate the ordercost and input everything into the table
    $saleamount = (int)$costperton * (int)$ordersize;

    $sql = "INSERT INTO `orders` (`orderid`, `skuid`, `username`, `saleamount`, `deliverydate`, `orderstatus`, `paymentrecived`, `ordersizetons`, `deliveryaddress`) 
        VALUES (NULL, '$productskuid', '$username', '$saleamount', '$devdate', 'PENDING', '0', '$ordersize', '$address');";
    $conn->query($sql);

    // Close the database connection
    $conn->close();
    ?>

    <h2>
        <p>Acount Details:</p>
        <p>Account Number: 1234567890</p>
        <p>Bank: yesbank</p>
        <p>Branch code:123243</p>
        <p>Send proof of payment to payments@biodx</p>
    </h2>
    <h3>
        <p>Your order:</p>
        <p>Product: <?php echo $productname?></p>
        <p>Sku: <?php echo $concentration?></p>
        <p>Order mass: <?php echo $ordersize?>tons</p>
        <p>cost: R<?php echo $saleamount?></p>
    </h3>

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