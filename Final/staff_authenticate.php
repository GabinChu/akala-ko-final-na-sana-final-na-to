    <?php
    session_start();

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if username and password are correct
        if ($_POST["email"] == "Staff" && $_POST["password"] == "12345") {
            // Set session variable to indicate user is authenticated
            $_SESSION["staff_logged_in"] = true;
            // Redirect to staff_dashboard.php after successful login
            header("Location: admin.php");
            exit;
        } else {
            // Redirect to staff_login.php with error message for invalid credentials
            $_SESSION["login_error"] = "Invalid username or password.";
            header("Location: staff_login.php");
            exit;
        }
    }
    ?>
