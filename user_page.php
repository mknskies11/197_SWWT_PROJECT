<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}


?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/backend.css">
</head>
<body>
<div class="admin-container">
        <div class="admin-content">
            <h3>Hey there, <span><?php echo $_SESSION['user_name']?> </span></h3>
            <h1>Welcome!</h1>
            <p>Welcome or welcome back!</p>
            <a href="home.php" class="admin-btn">Start Browsing</a>
            <a href="logout.php" class="admin-btn">Logout</a>

        </div>
    </div>
</body>
</html>