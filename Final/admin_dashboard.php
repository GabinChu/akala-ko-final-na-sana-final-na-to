<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: admin_login.php");
    exit;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        h2 {
            margin: 0;
            font-size: 24px;
        }
        .registration-form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
   <header>
        <h2>Welcome, Admin!</h2>
        <form action="" method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
    </header>
    <div class="registration-form">
        <h3 style="text-align: center;">Registration for Students</h3>
        <form action="register_student.php" method="post">
            <label for="student_name">Student Name:</label><br>
            <input type="text" id="student_name" name="student_name"><br>
            
            <label for="grade_section">Grade Section:</label><br>
            <input type="text" id="grade_section" name="grade_section"><br>
            
            <label for="cluster">Cluster:</label><br>
            <input type="text" id="cluster" name="cluster"><br>
            
            <label for="id_number">ID Number:</label><br>
            <input type="text" id="id_number" name="id_number"><br>
            
            <label for="lrn">LRN:</label><br>
            <input type="text" id="lrn" name="lrn"><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            
            <input type="submit" value="Make Student Account">
        </form>
    </div>
</body>
</html>
