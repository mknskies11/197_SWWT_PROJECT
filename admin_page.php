<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="backend.css">
</head>
<body>
<div class="admin-container">
        <div class="admin-content">
            <h3>Hey there, <span><?php echo $_SESSION['admin_name']?></span></h3>
            <h1>Welcome! </h1>
            <p>Have a nice day!</p>
            <a href="#" class="admin-btn">Admin Dashboard</a>
            <a href="#" class="admin-btn">Logout</a>

        </div>
    </div>
</body>
</html>