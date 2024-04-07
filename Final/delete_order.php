<?php
// Include your database configuration file
@include 'config.php';

// Check if order ID is provided in the request
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $order_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Delete the order from the database
    $sql = "DELETE FROM `order` WHERE id = $order_id";

    if(mysqli_query($conn, $sql)) {
        // Return success message
        echo "Order deleted successfully";
    } else {
        // Return error message
        echo "Error deleting order: " . mysqli_error($conn);
    }
} else {
    // Return error message if order ID is not provided
    echo "Order ID not provided";
}
?>
