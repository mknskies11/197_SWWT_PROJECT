<?php

include 'config.php';
include 'functions/common_function.php';

?>
<html>

<head>
  <title>Monochrome: Collections</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="home.css">
</head>


<body>
  <!--Bootstrap Navbar starts here-->
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
              <a class="nav-link mx-lg-2" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-lg-2" href="collection.php">Collections</a>
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
  <!--Bootstrap Navbar ends here-->


  <!--Header video COLLECTIONS begins here-->
  <div class="collectionheader-video">
    <div class="collectionheader-background">
      <video autoplay loop muted plays-inline class="back-video">
        <source src="Videos/collection header.mp4" type="video/mp4">
      </video>
      <div class="collection-content">
        <h1 style="font-size: 55px;">MONOCHROME COLLECTIONS</h1>
        <a href="#collections">Check Out</a>
      </div>
    </div>
  </div>
  <!--Header video COLLECTIONS ends here-->


  <!--COLLECTIONS - CATEGORIES Header begins here-->
  <section class="collection-categories">
    <div class="category-heading">
      <h2>Browse Our Latest <br><span>Collections</span></h2>
    </div>

  </section>
  <!--COLLECTIONS - CATEGORIES Header ends here-->


  <!--Collections Categories Container begins here-->
  <div class="categories-container">
    <div class="category-box">
      <img src="Images/category1.png" alt="categoryimg1">
      <h4>Spring Collection</h4>
      <span>22 Items</span>
      <i class='bx bxs-right-arrow-circle'></i>
    </div>

    <div class="category-box">
      <img src="Images/category2.png" alt="categoryimg2">
      <h4>Summer Collection</h4>
      <span>20 Items</span>
      <i class='bx bxs-right-arrow-circle'></i>
    </div>

    <div class="category-box">
      <img src="Images/category3.png" alt="categoryimg3">
      <h4>Fall Collection</h4>
      <span>25 Items</span>
      <i class='bx bxs-right-arrow-circle'></i>
    </div>

    <div class="category-box">
      <img src="Images/category4.png" alt="categoryimg4">
      <h4>Winter Collection</h4>
      <span>17 Items</span>
      <i class='bx bxs-right-arrow-circle'></i>
    </div>

    <div class="category-box">
      <img src="Images/category5.png" alt="categoryimg5">
      <h4>Other Collections</h4>
      <span>11 Items</span>
      <i class='bx bxs-right-arrow-circle'></i>
    </div>
  </div>
  <!--Collections Categories Container ends here-->


  <!--COLLECTION SET begins here-->
  <div class="collection-section">

    <!--Collection 1: l'Univers Noir et Blanc-->
    <div class="category-heading"  id="collections">
      <h2>MONOCHROME X ROSÉ | l'Univers Noir et Blanc<br><span>Jewelry Collection</span></h2>
    </div>
    <div class="collection-container">
      <div class="collection-box">
        <img src="Images/collection20.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection16.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection17.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection18.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection19.png">
      </div>
    </div>

    <!--Collection 2: MADEMOISELLE-->
    <div class="category-heading">
      <h2>MADEMOISELLE<br><span>Collection</span></h2>
    </div>
    <div class="collection-container">
      <div class="collection-box">
        <img src="Images/collection1.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection2.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection3.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection4.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection5.png">
      </div>
    </div>

    <!--Collection 3: TIMELESS BLANCHé-->
    <div class="category-heading">
      <h2>TIMELESS BLANCHé<br><span>Collection</span></h2>
    </div>
    <div class="collection-container">
      <div class="collection-box">
        <img src="Images/collection6.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection7.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection8.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection9.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection10.png">
      </div>
    </div>

    <!--Collection 4: BW:BRIDAL-->
    <div class="category-heading">
      <h2>BW: BRIDAL<br><span>Collection</span></h2>
    </div>
    <div class="collection-container">
      <div class="collection-box">
        <img src="Images/collection11.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection12.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection13.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection14.png">
      </div>
      <div class="collection-box">
        <img src="Images/collection15.png">
      </div>
    </div>


  </div>
  <!--COLLECTION SET ends here-->


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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>