<?php
// Database configuration
$servername = "localhost";
$dbusername = "id22309664_root";
$password = "1234Good!";
$database = "id22309664_biodxdb";

//getting the username from the button press
$username = $_GET['username'];

// Create connection
$conn = new mysqli($servername, $dbusername, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product data from the database
$sql = "SELECT orderid, deliverydate, orderstatus, ordersizetons, paymentrecived, saleamount, deliveryaddress
FROM orders  
WHERE username like '$username';";
$result = $conn->query($sql);

// Check if there are any products in the database
if ($result === false) {
    echo "Error executing the query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $order_id = $row["orderid"];
        $delivery_date = $row["deliverydate"];
        $order_status = $row["orderstatus"];
        $order_size = $row["ordersizetons"];
        $payment_recived = $row["paymentrecived"];
        $sale_amount = $row["saleamount"];
        $delivery_address = $row["deliveryaddress"];
        ?>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">Delivery Date: <?php echo $delivery_date; ?></p>
                    <p class="card-text">Order Status: <?php echo $order_status; ?></p>
                    <p class="card-text">Order Size: <?php echo $order_size; ?> tons</p>
                    <p class="card-text">Delivery Adderss:<br> <?php echo $delivery_address; ?></p>

                    <?php if ($payment_recived == 0): ?>
                        <p class="card-text">Payment not made</p>
                    <?php else: ?>
                        <p class="card-text">Payment made, thank you</p>
                    <?php endif; ?>

                    <p class="card-text">Cost: R<?php echo $sale_amount; ?></p>

                    <?php if ($order_status == "PENDING"): ?>
                        <form action="cancelorder.php" method="post">
                            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                            <button type="submit" class="btn btn-danger">Cancel Order</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "you have never placed an order";
}

// Close the database connection
$conn->close();
?>