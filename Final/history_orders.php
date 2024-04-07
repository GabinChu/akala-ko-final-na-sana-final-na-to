<?php
// Include your database configuration file
@include 'config.php';

// Query to fetch all orders from the history table
$select_orders = mysqli_query($conn, "SELECT * FROM `order_history`");

// CSS styles for the orders table
$css = "
    <style>
        .orders-table-container {
            margin-top: 20px;
            overflow-x: auto;
        }

        .orders-table {
            width: 100%;
            border-collapse: collapse;
        }

        .orders-table th, .orders-table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .orders-table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .orders-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .orders-table tr:hover {
            background-color: #ddd;
        }

        .no-orders {
            margin-top: 20px;
            font-style: italic;
            color: #777;
        }
    </style>
";

echo $css;

// Check if there are any orders in the history
if(mysqli_num_rows($select_orders) > 0) {
    echo '<h2>History Orders</h2>';
    echo '<div class="orders-table-container">';
    echo '<table class="orders-table">';
    echo '<tr><th>Student Name</th><th>Contact</th><th>Email</th><th>Method</th><th>Building</th><th>Strand and Section</th><th>Cluster</th><th>Advisory</th><th>Year</th><th>ID</th><th>Total Price</th></tr>';
    
    // Loop through each order and display the details
    while($row = mysqli_fetch_assoc($select_orders)) {
        echo '<tr>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['number'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['method'].'</td>';
        echo '<td>'.$row['flat'].'</td>';
        echo '<td>'.$row['street'].'</td>';
        echo '<td>'.$row['city'].'</td>';
        echo '<td>'.$row['state'].'</td>';
        echo '<td>'.$row['country'].'</td>';
        echo '<td>'.$row['pin_code'].'</td>';
        echo '<td>'.$row['total_price'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
} else {
    // If no orders found in history, display a message
    echo '<div class="no-orders">No history orders found.</div>';
}
?>

<div class="go-back-button">
    <a href="orders.php">Go Back</a>
</div>
