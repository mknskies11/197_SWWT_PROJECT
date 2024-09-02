<?php
include 'config.php'; // Include your database connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monochrome: Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="checkout.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="home.php"><img src="Images/logo.png" width="50%"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="Images/logo.png" width="70%"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="collection.php">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="contactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="aboutus.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="login_form.php" class="login-button">Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>



    <!-- Checkout Form -->
  <div class="form-container">
    <form action="" method="post">
      <h3>Checkout</h3>

      <input type="text" name="user_name" required placeholder="Enter your full name">
      <input type="text" name="user_address" required placeholder="Enter your address">
      <input type="text" name="user_email" required placeholder="Enter your email">
      <select name="payment_type">
        <option value="payment_select">--Select Payment Method--</option>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="paypal">PayPal</option>
        <option value="cash_on_delivery">Cash on Delivery (Currently not available)</option>
      </select>
      <input type="submit" value="proceed to pay" class="form-btn" name="submit">
      <p>Changed decision? <a href="cart.php">Go back</a></p>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
