<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) >0){

    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'admin'){

      $_SESSION['admin_name'] = $row['name'];
      header('location:admin_page.php');

    }elseif($row['user_type'] == 'user'){

      $_SESSION['user_name'] = $row['name'];
      header('location:user_page.php');
    
    }
  }else{
      $error[] = 'Incorrect email or password!';
  }

};


?>


<!DOCTYPE html>
<html>
<head>
  <title>Monochrome: Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="backend.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> 
</head>


<body>
  <header>
    <!-- Bootstrap navbar starts here -->
    <nav class="navbar navbar-expand-lg">
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
                <a class="nav-link mx-lg-2" href="Home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="collection.html">Collections</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="contactus.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="aboutus.html">About Us</a>
              </li>
            </ul>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>

  <!-- Login form starts here -->
  <div class="form-container">
    <form action="" method="post">
      <h3>Login</h3>

      <?php
      if(isset($error)){
        foreach($error as $error){
          echo '<span class="error-msg">'.$error.'</span>';
        };
      };
      ?>

      <input type="text" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter a password">
      <input type="submit" name="submit" value="Login" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register</a></p>
    </form>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h5>MonoFam</h5>
          <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="collection.html">Collections</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="aboutus.html">About Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Events</h5>
          <ul>
            <li><a href="https://edition.cnn.com/style/nyfw-spring-summer-2024-highlights/index.html" target="_blank">Fashion Week</a></li>
            <li><a href="https://www.vogue.com/slideshow/met-gala-2023-red-carpet-live-celebrity-fashion" target="_blank">Met Gala</a></li>
            <li><a href="#">Campaign Events</a></li>
            <li><a href="#">Pop-Up Stores</a></li>
            <li><a href="#">Virtual Events</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>More</h5>
          <ul>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Archive</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Follow Us</h5>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-discord"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
