<?php
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_name = $_POST['student_name'];
    $grade_section = $_POST['grade_section'];
    $cluster = $_POST['cluster'];
    $id_number = $_POST['id_number'];
    $lrn = $_POST['lrn'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Insert data into database
    $sql = "INSERT INTO students (student_name, grade_section, cluster, id_number, lrn, email, username, password) VALUES ('$student_name', '$grade_section', '$cluster', '$id_number', '$lrn', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Student account created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
