<?php




if ($_SERVER["REQUEST_METHOD"] == "GET") {
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
    $result = $conn->query($sql);

    // Check if there are any products in the database
    if ($result === false) {
        echo "Error executing the query: " . $conn->error;

    } elseif ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $description = $row["description"];
            $image_reference = $row["image"];
            ?>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="Images/<?php echo $image_reference; ?>" class="card-img-top" alt="">
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
    $conn->close();
}
?>