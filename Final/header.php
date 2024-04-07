<?php

// Check if the user is authenticated as staff
$staff_authenticated = isset($_SESSION["authenticated"]);
$font_awesome_cdn = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">';

?>

<header class="header">
    <div class="flex">
    <img src="ayoko.jpg" alt="Logo" class="logo-img" width="50" height="50">

        <?php if ($staff_authenticated) : ?>
            <a href="#" class="logo">Welcome Staff</a>
        <?php else : ?>
            <a href="#" class="logo">Welcome Student</a>
        <?php endif; ?>
        <nav class="navbar">
            <?php if ($staff_authenticated) : ?>
                <a href="orders.php">See Orders</a>
                <a href="index.php">Logout</a>
            <?php else : ?>
                <a href="products.php">View Products</a>
                
        <?php
        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
        $row_count = mysqli_num_rows($select_rows);
        ?>

                <a href="cart.php" class="cart"><i class="fas fa-shopping-cart"></i> <span><?php echo $row_count; ?></span></a>
                    <a href="index.php">Logout</a>
                
            <?php endif; ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
</header>

