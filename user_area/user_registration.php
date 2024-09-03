<?php

include ('../config.php');
include('../functions/common_function.php');


?>
<html>

<head>
  <title>Monochrome: Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

 
</head>

<body>
  <header>
    <!-- Registration form starts here -->
    <div class="form-container mx-auto shadow-lg p-4 rounded bg-light" style="max-width: 500px;">
      <form action="" method="post" enctype="multipart/form-data">
        <h3 class="text-center text-dark mb-4">Register</h3>

        <!-- Username -->
        <div class="mb-3">
          <label for="user_username" class="form-label">Username</label>
          <input type="text" id="user_username" class="form-control" autocomplete="off" name="user_username" required
            placeholder="Enter your username">
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="user_email" class="form-label">Email</label>
          <input type="email" id="user_email" class="form-control" autocomplete="off" name="user_email" required
            placeholder="Enter your email">
        </div>

        <!-- Address -->
        <div class="mb-3">
          <label for="user_address" class="form-label">Address</label>
          <input type="text" id="user_address" class="form-control" autocomplete="off" name="user_address" required
            placeholder="Enter your address">
        </div>

        <!-- Profile Image -->
        <div class="mb-3">
          <label for="user_image" class="form-label">Profile Image</label>
          <input type="file" id="user_image" class="form-control" name="user_image" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="user_password" class="form-label">Password</label>
          <input type="password" id="user_password" class="form-control" name="user_password" required
            placeholder="Enter a password">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
          <label for="conf_user_password" class="form-label">Confirm Password</label>
          <input type="password" id="conf_user_password" class="form-control" name="conf_user_password" required
            placeholder="Confirm password">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-dark w-100" name="user_register">Register</button>

        <!-- Login Link -->
        <p class="mt-3 text-center">Already have an account? <a href="user_login.php" class="text-decoration-none">Login</a></p>
        <p class="mt-3 text-center">Go back to <a href="../home.php" class="text-decoration-none">Home</a></p>
      </form>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>


<!-- php codes -->
<?php
if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();



    //select query
    $select_query = "SELECT * FROM `user_table` WHERE user_name='$user_username' OR user_email='$user_email'" ;
    $result = mysqli_query($conn, $select_query);
    $rows_count = mysqli_num_rows($result);
    if ($rows_count > 0){
      echo "<script>alert('Username or Email already exists')</script>";
    }
    elseif($user_password != $conf_user_password){
      echo "<script>alert('Passwords do not match, please try again!')</script>";
    }
    else{
      //insert query
      move_uploaded_file($user_image_tmp,"user_images/$user_image");
      $insert_query = "INSERT INTO `user_table` (user_name, user_email, user_password, user_image, user_ip, user_address) VALUES ('$user_username', '$user_email', '$hash_password', '$user_image', '$user_ip', '$user_address')";

      $sql_execute = mysqli_query($conn, $insert_query);
      echo  "<script>alert('User registration is successful!')</script>";
    }

    //selecting cart items
    $select_cart_items = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip' ";
    $result_cart = mysqli_query($conn, $select_cart_items);
    $rows_count = mysqli_num_rows($result_cart);

    if($rows_count > 0){
      $_SESSION['user_name'] = $user_username;
      echo "<script>alert('You have items in your cart')</script>";
      echo "<script>window.open('checkout.php','_self ')</script>";
    }
    else{
      echo "<script>window.open('../home.php','_self ')</script>";
    }

  }







?>