<?php
include('../config.php');
include ('../functions/common_function.php');
@session_start();


?>
<html>

<head>
  <title>Monochrome: Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header>

  <!-- Login Form Container -->
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-4 shadow-lg border-0" style="max-width: 400px; width: 100%;">
      <form action="" method="post" enctype="multipart/form-data">
        <h3 class="text-center mb-4">Login</h3>

        <!-- Username Field -->
        <div class="mb-3">
          <label for="user_username" class="form-label">Username</label>
          <input type="text" id="user_username" class="form-control" autocomplete="off" name="user_username" required
            placeholder="Enter username">
        </div>

        <!-- Password Field -->
        <div class="mb-3">
          <label for="user_password" class="form-label">Password</label>
          <input type="password" id="user_password" class="form-control" name="user_password" required
            placeholder="Enter password">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-dark w-100" name="user_login">Login</button>

        <!-- Register Link -->
        <p class="text-center mt-3">Don't have an account? <a href="user_registration.php">Register</a></p>
        <p class="mt-3 text-center">Go back to <a href="../home.php" class="text-decoration-none">Home</a></p>
      </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>


<?php

if(isset($_POST['user_login'])){
  $user_username = $_POST['user_username'];
  $user_password = $_POST['user_password'];
  
  $select_query = "SELECT * FROM `user_table` WHERE user_name='$user_username'";
  $result = mysqli_query($conn, $select_query);
  $row_count = mysqli_num_rows($result);
  $row_data = mysqli_fetch_assoc($result);
  $user_ip = getIPAddress();


  //if the user has items in the cart --> accessing cart items
  $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
  $select_cart = mysqli_query($conn, $select_query_cart);
  $row_count_cart = mysqli_num_rows($select_cart);








  if($row_count > 0){
    $_SESSION['user_name'] = $user_username;
    if(password_verify($user_password, $row_data['user_password'])){
      // echo "<script>alert('Login successful!')</script>";
        if($row_count == 1 AND $row_count_cart == 0){ //which means that the user Logged in BUT doesn't have any item in the cart
          $_SESSION['user_name'] = $user_username;
          echo "<script>alert('Login successful!')</script>";
          echo "<script>window.open('profile.php','_self')</script>";
        } 
        else{
          $_SESSION['user_name'] = $user_username;
          echo "<script>alert('Login successful!')</script>";
          echo "<script>window.open('payment.php','_self')</script>";
        }
        
    }
    else{
      echo "<script>alert('Invalid credentials, please try again!')</script>";
    }
  }
  else{
    echo "<script>alert('Invalid credentials, please try again!')</script>";
  }

}

?>
