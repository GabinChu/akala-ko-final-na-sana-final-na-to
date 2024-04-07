<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('ayokoo.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Ensure content stretches to at least full viewport height */
            position: relative; 


        }
        
             .sidebar {
         height: 100%;
         width: 0;
         position: fixed;
         top: 0;
         left: 0;
         background-color: #111;
         overflow-x: hidden;
         transition: 0.5s;
         padding-top: 60px;
      }
      .sidebar a {
         padding: 10px 15px;
         text-decoration: none;
         font-size: 18px;
         color: #818181;
         display: block;
         transition: 0.3s;
      }
      .sidebar a:hover {
         color: #f1f1f1;
      }
      .sidebar .close-btn {
         position: absolute;
         top: 0;
         right: 25px;
         font-size: 36px;
         margin-left: 50px;
      }
      .open-btn {
         font-size: 30px;
         cursor: pointer;
         position: fixed;
         top: 20px;
         left: 10px;
      }
      .open-btn:hover {
         color: #fff;
      }
        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        nav {
            background-color: #2c3e50;
            padding: 10px 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        li {
            display: inline-block;
            margin: 0 10px;
        }

        li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        li a:hover {
            background-color: #34495e;
        }

        li a.active {
            background-color: #2980b9;
        }

        /* Animation */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        nav {
            animation: fadeIn 0.5s ease;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Arellano University Jose Rizal Campus</h1>
        <h2>Cafeteria Ordering System</h2>
    </header>
    <div class="sidebar" id="sidebar">
   <a href="#" onclick="closeNav()" class="close-btn">&times;</a>
   <a href="admin_login.php"><i class="fas fa-user-cog"></i>Admin Log in</a>
</div>

<span class="open-btn" onclick="openNav()">&#9776;</span>

<script>
   function openNav() {
      document.getElementById("sidebar").style.width = "250px";
   }

   function closeNav() {
      document.getElementById("sidebar").style.width = "0";
   }
</script>
    <nav>
        <ul>
<li><a href="student_login.php"><i class="fas fa-user"></i> Students Log in</a></li>
<li><a href="staff_login.php"><i class="fas fa-utensils"></i> Staff Log in</a></li>
        </ul>
    </nav>
    <footer>
        &copy; <?php echo date("Y"); ?> Arellano University Jose Rizal Campus. All rights reserved.
    </footer>
</body>
</html>
