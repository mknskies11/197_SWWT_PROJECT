<?php
include 'config.php';
include 'functions/common_function.php';

?>


<html>

<head>
  <title>Monochrome Fashion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>


<body>
  <!--Bootstrap navigation bar begins here-->
  <header>
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
                <a class="nav-link active mx-lg-2" aria-current="page" href="home.php">Home</a>
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
  </header>
  <!--bootstrap navigation bar ends here-->


  <!--carousal starts here-->
  <div class="col-md-6.5">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/sl1.png" class="d-block w-100" alt="slide1" >
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/sl2.png" class="d-block w-100" alt="slide2">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/sl3.png" class="d-block w-100" alt="slide3">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/sl4.png" class="d-block w-100" alt="slide4">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--Bootstrap carousal ends here-->

  <?php
  // $ip = getIPAddress();
  // echo 'User Real IP Address - '.$ip;
  
  ?>

  <!--BW:BRIDAL banner starts here-->
  <div class="bwbridal-banner">
    <div class="bridalbanner-text">
      <h2>BW : BRIDAL</h2>
      <p>This is your sign to make your fairytale-like wedding dress dream <br>come true with Monochrome's bridal
        collection!</p>
      <div class="bridal-btn">
        <a href="collection.html">RESERVE NOW</a>
      </div>
    </div>
  </div>
  <!--Bridal banner ends here-->


  <br><br><br><br>
  <!--Title for Collab Video ROSE begins here-->
  <div class="video-intro">
    <h5>━━━✦❘༻༺❘✦━━━</h5>
    <h3>JEWELRY COLLECTION l'Univers Noir et Blanc</h3>
    <p>STARRING MONOCHROME'S GLOBAL AMBASSADOR ROSÉ</p>
  </div>
  <br><br><br>
  <!--Title for Collab Video ROSE ends here-->


  <!--Collab video ROSE begins here-->
  <div class="body-video">
    <div class="body-background">
      <video autoplay loop muted plays-inline class="back-video">
        <source src="Videos/home body video collab.mp4" type="video/mp4">
      </video>
      <div class="video-content">
        <h1>l'Univers Noir et Blanc</h1>
        <p>MONOCHROME X ROSÉ</p>
        <a href="collection.html">Check Out</a>
      </div>
    </div>
  </div>
  <!--Collab video ROSE ends here-->


  <!--Soojin Going Black banner-->
  <div class="goingblack-banner">
    <div class="goingblackbanner-text">
      <h4>Monochrome is going black with ...</h4>
      <h1>DARK FANTASY</h1>
      <p>Available to purchase on our boutiques worldwide in 2024. Whether you choose <br>to be a dark villain or to
        embrace your dark fantasy dream in
        a GALA creation, <br>each dress is far beyond a product <br>It's a marvelous story!</p>
      <div class="goingblack-btn">
        <a href="collection.html">RESERVE NOW</a>
      </div>
    </div>
  </div>


  <!--Card starts here-->
  <div class="col-md-6.5">
    <div id="card-area">
      <div class="wrapper">
        <div class="box-area">
          <div class="box">
            <img src="Images/FotoJet (15).jpg" alt="cardimag1">
            <div class="overlay">
              <h4>WHERE MAGIC HAPPENS...</h4>
              <p>Our MONOCHROME HQ in LA, USA!</p>
              <a href="aboutus.html">Go on a mono-tour!</a>
            </div>
          </div>
          <div class="box">
            <img src="Images/FotoJet (21).jpg" alt="cardimg2">
            <div class="overlay">
              <h4>OUR TALENTED TEAM</h4>
              <p>Our team of professionals know when to #slay!</p>
              <a href="aboutus.html">Go on a mono-tour!</a>
            </div>
          </div>
          <div class="box">
            <img src="Images/FotoJet (17).jpg" alt="cardimg3">
            <div class="overlay">
              <h4>EACH PATTERN MAKES A DIFFERENCE</h4>
              <p>Our belief is that each small detail can make a beautiful outcome!</p>
              <a href="aboutus.html">Go on a mono-tour!</a>
            </div>
          </div>
          <div class="box">
            <img src="Images/FotoJet (18).jpg" alt="cardimg4">
            <div class="overlay">
              <h4>MONOCHROME FASHION ARISES</h4>
              <p>Black and White Fashion >>> Any other colour themed fashion</p>
              <a href="aboutus.html">Go on a mono-tour!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--card set ends here-->


  <!--Small insight towards "about us"-->
  <br><br>
  <div class="aboutus-insight">
    <h5><b>╭────── · · ୨୧ · · ──────╮</b></h5>
    <br>
    <h5>
      W&nbsp;E&nbsp;&nbsp;&nbsp;@&nbsp;&nbsp;&nbsp;M&nbsp;O&nbsp;N&nbsp;O&nbsp;C&nbsp;H&nbsp;R&nbsp;O&nbsp;M&nbsp;E</h5>
    <h6>"A realm where style converges with unity, and every stitch tells us a monologue..."</h6>

    <br>
    <p>At the heart of our beliefs, we believe that fashion is not just clothing, but is an expression
      of confident individuality woven into the fabric if a collective aesthetic.
      <br>Our commitment to fashion and elegance is reflected not only in our designs, but also in the
      uniqueness that defines our approach to fashion. <br>Whether you're drawn to the allure of our Vintage Elegance
      Collection or seeking the latest trends in our own MonoChess Collection, <br><b>MONOCHROME Fashion</b> invites you
      to explore
      a wardrobe
      that transcends time and resonates with your unique style journey.
      <br><br>Join us in celebrating the artistry of fashion, where every piece is a reflection of our collective
      dedication to
      style, diversity and beauty!
    </p>
    <br>
    <h5><b>╰────── · · ୨୧ · · ──────╯</b></h5> <br><br><br>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>