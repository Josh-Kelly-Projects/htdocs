<?php

// Check if product ID is set in the URL
if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];

} else {
    // Redirect if product ID is not set
    header("Location: error.php");
    exit;
}
?>