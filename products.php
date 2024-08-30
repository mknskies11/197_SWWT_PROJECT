<?php
include 'config.php';
include 'functions/common_function.php';


?>
<html>

<head>
  <title>Monochrome: Products</title>
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
              <a class="nav-link mx-lg-2" href="collection.php">Collections</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-lg-2" href="products.php">Products</a>
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

                <!-- Navbar Icons -->
          <div class="d-flex align-items-center me-3">
            <a href="user_page.php" class="text-dark me-3"><i class="bx bx-user bx-sm"></i></a>
            <a href="#" class="text-dark me-3"><i class="bx bx-cart bx-sm"></i></a>
            <form class="d-flex me-3" role="search">
            <input class="form-control form-control-sm" type="search" placeholder="Explore Outfits..." aria-label="Search" name="search_data">
            <input type="submit" value="Search" class="btn" name="search_data_product">
          </div>

          
      <a href="login_form.php" class="login-button">Login</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!--Bootstrap Navbar ends here-->


  <!--Header video PRODUCTS begins here-->
  <div class="collectionheader-video">
    <div class="collectionheader-background">
      <video autoplay loop muted plays-inline class="back-video">
        <source src="Videos/products header.mp4" type="video/mp4">
      </video>
      <div class="collection-content">
        <h2 style="font-family: Dream Avenue; color: #fff; font-size: 55px;">PRODUCTS AT MONOCHROME</h2>
      </div>
    </div>
  </div>
  <!--Header video PRODUCTS ends here-->

  <!--NEW ARRIVALS begins here-->
  <div class="newarrivals-heading">
    <h2>Latest & Hottest<br><span>NEW ARRIVALS</span></h2>
  </div>
  <div class="newarrivals-container">

<!--product 1 -->
    <div class="product-box">
      <img src="Images/p1.png">
        <h5>Straight Cuff Sleeved Organza Shirt</h5>
        <h6 class="price">$218</h6>
        <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
      </div>

      <div class="product-box">
        <img src="Images/p2.png">
          <h5>Straight Collared Neck Mesh Shirt</h5>
          <h6 class="price">$218</h6>
          <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
        </div>

        <div class="product-box">
          <img src="Images/p3.png">
            <h6 class="price">$600</h6>
            <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
          </div>

          <div class="product-box">
            <img src="Images/p4.png">
              <h5>Peplum Sleeveless Silk Chiffon Top</h5>
              <h6 class="price">$600</h6>
              <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
            </div>

            <div class="product-box">
              <img src="Images/p5.png">
                <h5>Peplum Sleeveless Silk Chiffon Top</h5>
                <h6 class="price">$570</h6>
                <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
              </div>

              <div class="product-box">
                <img src="Images/p6.png">
                  <h5>Peplum Sleeveless Silk Chiffon Top</h5>
                  <h6 class="price">$600</h6>
                  <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
                </div>

                <div class="product-box">
                  <img src="Images/p7.png">
                    <h5>Peplum Sleeveless Silk Chiffon Top</h5>
                    <h6 class="price">$410</h6>
                    <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
                  </div>
    </div>
  </div>
<!--NEW ARRIVALS end here-->


<!--SPRING DRESSES begins here-->
<div class="newarrivals-heading">
    <h2>Newest & Elegant<br><span>SPRING DRESS COLLECTION</span></h2>
  </div>
  <div class="newarrivals-container">

  <?php
      //calling function
      getProducts();
   ?>

<!-- <div class="product-box">
        <img src="Images/p2.png">
          <h5>Straight Collared Neck Mesh Shirt</h5>
          <div class="star">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>
          <h6 class="price">$218</h6>
          <a href="#"><i class='bx bxs-shopping-bag-alt' ></i></a>
        </div> -->





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>