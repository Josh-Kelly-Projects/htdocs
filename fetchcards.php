<?php
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

// Fetch product data from the database
$sql = "SELECT name, description, image FROM products";
$result = mysqli_query($conn, $sql);

// Check if there are any products in the database
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $description = $row["description"];
        $image_reference = $row["image_reference"];
        ?>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="Images/<?php echo $image_reference; ?>" class="card-img-top" alt="<?php echo $name; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text"><?php echo $description; ?></p>
                    <a href="productpage.php" class="btn btn-primary">Purchase</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
}
?>