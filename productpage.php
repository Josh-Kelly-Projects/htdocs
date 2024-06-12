<?php

// Check if product ID is set in the URL
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];

} else {
    // Redirect if product ID is not set
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



    <?php include 'navbar.php'; ?>

    <div class="container" style="padding: 40px;">
        <div class="cointainer-fluid">
            <div class="row">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Database configuration
                    $servername = "localhost";
                    $username = "root";
                    $password = "1234Good!";
                    $database = "biodxdb";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch product data from the database
                    $sql = "SELECT concentration, costperton, description, skuid FROM productskus WHERE productid = '$product_id'";
                    $result = $conn->query($sql);

                    // Check if there are any products in the database
                    if ($result === false) {
                        echo "Error executing the query: " . $conn->error;

                    } elseif ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $concentration = $row["concentration"];
                            $cost_per_ton = $row["costperton"];
                            $description = $row["description"];
                            $productsku_id = $row["skuid"];
                            ?>

                            <div class="col-sm-3">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $name; ?>
                                            <?php echo $concentration; ?>
                                        </h5>
                                        <p class="card-text"><?php echo $description; ?></p>
                                        <p class="card-text">The cost per ton is: R<?php echo $cost_per_ton; ?></p>

                                        <form action="checkout.php" method="post">
                                            <input type="hidden" name="productskuid"
                                                value="<?php echo htmlspecialchars($productsku_id); ?>">
                                            <button type="submit" class="btn btn-primary">Purchase</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    // Close the database connection
                    $conn->close();
                }
                ?>
            </div>

        </div>
    </div>
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