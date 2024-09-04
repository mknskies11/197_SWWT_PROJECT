<?php

include 'config.php';
include 'functions/common_function.php';
session_start();


?>
<html>

<head>
  <title>Monochrome: Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/backend.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> 
  <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #000;
        }

        .form-control,
        .form-control:focus {
            background-color: #f8f9fa;
            border-color: #ddd;
            color: #000;
        }

        .btn {
            background-color: #000;
            border-color: #444;
            color: #fff;
        }

        .btn:hover {
            background-color: #333;
            border-color: #555;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
  <header>
    <!--Bootstrap navbar starts here-->
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
                <a class="nav-link mx-lg-2" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="collection.php">Collections</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active mx-lg-2" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="aboutus.php">About Us</a>
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
                echo "<a href='user_area/user_login.php' class='login-button'>Login</a>";
            }
            else{
                echo "<a href='user_area/logout.php' class='login-button'>Logout</a>";
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


<!-- Contact Us Form -->
<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form action="send_mail.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" required name="contactname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="contactemail" id="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Write your message here:</label>
                <textarea class="form-control" name="contactmessage" id="message" rows="4" placeholder="Your Message"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submitContact">Send</button>
        </form>
    </div>
</div>




  <!--Footer-->
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

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <script src="sweetalert2.all.min.js"></script>

    <script>

      var messageText = "<?= $_SESSION['status'] ?? ''; ?>";

      if(messageText != ''){
      Swal.fire({
      title: "Thank you",
      text: messageText,
      icon: "success"
      });
      <?php unset($_SESSION['status']) ?>
    }
    </script>
</body>

</html>
