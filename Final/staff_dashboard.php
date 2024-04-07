<?php
session_start();
if (!isset($_SESSION['staff_logged_in'])) {
    header("Location: staff_login.php");
    exit;
}
// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: staff_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <header>
        <h2>Welcome, Staff!</h2>
        <form action="" method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
    </header>    <!-- Add content specific to staff dashboard -->
</body>
</html>
