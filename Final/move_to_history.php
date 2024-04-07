<?php
// Include your database configuration file
@include 'config.php';

// Function to move order to history
function moveOrderToHistory($conn, $order_id) {
    $sql_select_order = "SELECT * FROM `order` WHERE id = $order_id";
    $result = mysqli_query($conn, $sql_select_order);

    if(mysqli_num_rows($result) > 0) {
        $order_data = mysqli_fetch_assoc($result);
        
        // Insert the order into the history table
        $sql_move_to_history = "INSERT INTO `order_history` (name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) 
                                VALUES ('{$order_data['name']}', '{$order_data['number']}', '{$order_data['email']}', '{$order_data['method']}', '{$order_data['flat']}', '{$order_data['street']}', '{$order_data['city']}', '{$order_data['state']}', '{$order_data['country']}', '{$order_data['pin_code']}', '{$order_data['total_products']}', '{$order_data['total_price']}')";

        // Execute the query to move the order to history
        $move_result = mysqli_query($conn, $sql_move_to_history);

        if($move_result) {
            // If the order is successfully moved to history, delete it from the current orders table
            $sql_delete_order = "DELETE FROM `order` WHERE id = $order_id";
            $delete_result = mysqli_query($conn, $sql_delete_order);
            
            if($delete_result) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Check if the order ID is set in the URL
if(isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Move the order to history
    $move_to_history = moveOrderToHistory($conn, $order_id);

    if($move_to_history) {
        // If the order is successfully moved to history, redirect back to the admin page
        header("Location: orders.php");
        exit();
    } else {
        // If there was an error moving the order, display an error message
        echo "Error: Unable to move the order to history.";
    }
} else {
    // If the order ID is not set in the URL, display an error message
    echo "Error: Order ID not provided.";
}
?>
