<?php
include '../config.php'; // Include your database connection
include '../functions/common_function.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monochrome: Payment Options</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="../home.css">
</head>

<!--Bootstrap navigation bar begins here-->
<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="../home.php"><img src="../Images/logo.png" width="50%"></a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../Images/logo.png" width="70%"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" aria-current="page" href="../home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="../collection.php">Collections</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="../products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="../contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="../aboutus.php">About Us</a>
            </li>
          </ul>
        </div>
      </div>

 <!-- Navbar Icons -->
 <div class="d-flex align-items-center me-3">
 <?php
              if (!isset($_SESSION['user_name'])) {
                echo "<p>Guest</p>";
              } else {
                // Use curly braces to properly parse the session variable inside the string
                echo "<p>{$_SESSION['user_name']}</p>";
              }
              ?>

            <a href="user_area/profile2.php" class="text-dark me-3"><i class='bx bx-user bx-sm'></i></a>
            <a href="cart.php" class="text-dark me-3" style="text-decoration: none;"><i class="bx bx-cart bx-sm"></i> <?php cart_item(); ?></a>
            <p>Total Price: $<?php total_cart_price(); ?></p>

          </div>


          <?php
            if (!isset($_SESSION['user_name'])){
                echo "<a href='user_login.php' class='login-button'>Login</a>";
            }
            else{
                echo "<a href='logout.php' class='login-button'>Logout</a>";
            }
            
            ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!--Bootstrap Navbar ends here-->
</header>


<!-- Link to Google Fonts for Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Checkout Form Container -->
<div class="container my-5" style="font-family: 'Poppins', sans-serif;">
  <div class="row justify-content-center">
    <!-- Payment Options Form -->
    <div class="col-md-6">
      <form action="" method="post" class="p-4 border rounded shadow-sm bg-white">
        <h3 class="mb-4 text-center">Payment Options</h3>

        <!-- Full Name Input -->
        <div class="mb-3">
          <label for="full_name" class="form-label">Full Name:</label>
          <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter your full name" required>
        </div>

        <!-- Delivery Address Input -->
        <div class="mb-3">
          <label for="delivery_address" class="form-label">Delivery Address:</label>
          <textarea id="delivery_address" name="delivery_address" class="form-control" rows="3" placeholder="Enter your delivery address" required></textarea>
        </div>

        <!-- Contact Number Input -->
        <div class="mb-3">
          <label for="contact_number" class="form-label">Contact Number:</label>
          <input type="tel" id="contact_number" name="contact_number" class="form-control" placeholder="Enter your contact number" required>
        </div>

        <!-- Payment Method Selection -->
        <div class="mb-3">
          <label for="payment_type" class="form-label">Select Payment Method: </label>
          <select name="payment_type" id="payment_type" class="form-select" required>
            <option value="">--Select Payment Method--</option>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="cash_on_delivery" disabled>Cash on Delivery (Currently not available)</option>
          </select>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
          <input type="submit" value="Proceed to Pay" class="btn btn-dark" name="submit" style="background-color: black; border: none;">
        </div>

        <!-- Back to Cart Link -->
        <p class="mt-3 text-center">
          Changed your decision? <a href="cart.php" class="text-decoration-none">Go back</a>
        </p>
      </form>
    </div>


    <?php
    $user_ip = getIPAddress();
    $get_user = "SELECT * FROM `user_table` WHERE user_ip='$user_ip'";
    $result = mysqli_query($conn, $get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];
    
    
    
    ?>
    <!-- Pay Offline Form -->
    <div class="col-md-4">
      <form action="" method="post" class="p-4 border rounded shadow-sm bg-white">
        <h3 class="mb-4 text-center">Pay Offline</h3>

        <!-- Proceed to Pay Button -->
        <div class="d-grid">
          <button type="button" class="btn btn-primary" style="background-color: black; border: none; "><a href="order.php?user_id=<?php echo $user_id; ?>">Proceed to Pay</a></button>
        </div>
      </form>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>