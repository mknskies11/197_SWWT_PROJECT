<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monochrome: About Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="home.css">
</head>

<!--Bootstrap navigation bar begins here-->
<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#"><img src="Images/logo.png" width="50%"></a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="Images/logo.png" width="70%"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" aria-current="page" href="Home.html">Home</a>
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
              <a class="nav-link active mx-lg-2" href="aboutus.php">About Us</a>
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


<!--About Us Header Banner-->
<div class="aboutus-header">
  <div class="aboutusheader-text">
    <h3 class="about-subtitle">Get to know Monochrome:</h3>
    <h1 class="about-title">ABOUT US</h1>
  </div>
</div>

<!--About Us small card set-->
<div id="aboutuscard-area">
  <div class="aboutus-wrapper">
    <div class="aboutusbox-area">
      <div class="about-box">
        <a href="#ourhq"><img src="Images/cardimg4.png" alt="cardimag1"></a>
      </div>
      <div class="about-box">
        <a href="#ourteam"><img src="Images/cardimg1.png" alt="cardimg2"></a>
      </div>
      <div class="about-box">
        <a href="#ourpatterns"><img src="Images/cardimg2.png" alt="cardimg3"></a>
      </div>
      <div class="about-box">
        <a href="#ourconcept"><img src="Images/cardimg3.png" alt="cardimg4"></a>
      </div>
    </div>
  </div>
</div>
<!--About Us header Paragraph-->
<div class="aboutus-para">
  <p class="about-description">Imagine mornings where your wardrobe becomes your canvas, a world of black and white
    where each piece complements the other. Our garments are
    designed to harmonize seamlessly, allowing you to orchestrate a symphony of looks with a single note.

    <br><br> Monochrome is an elegant composition, a carefully curated wardrobe where black and white notes weave
    together to create
    a timeless symphony of style. We transcend fleeting trends, offering a haven for those who cherish the enduring
    allure of monochrome.
  </p>
</div>


<!--About Us HQ part-->
<div class="hqwrapper">
  <img src="Images/hqmain.jpg" width="80%" height="60%" id="ourhq" class="hqmain-img">
  <div class="hqtext-box">
    <h2>Monochrome HQ</h2>
    <h5>At LA, USA</h5>
    <p>Monochrome Fashion isn't just a clothing company, it's a Los Angeles story written in 2022. Our headquarters, a
      stunning
      interplay of light and shadow in the heart of
      LA, embodies the very essence of our brand: where West Coast cool meets enduring monochrome style.

      <br><br>Step inside our headquarters and you'll find a space that reflects the philosophy woven into every stitch
      of our clothing.
      Think exposed brick walls juxtaposed with sleek, modern furniture. Abundant natural light floods the studio,
      highlighting the meticulous
      craftsmanship of our black and white collections. It's a space that celebrates the beauty of contrasts, a
      testament to the versatility and
      timeless appeal of black and white fashion.
    </p>
  </div>
</div>


<!--HQ Gallery-->
<div class="gallery-wrapper">
  <div class="img-area" id="hqgallery">
    <div class="single-img"><img src="Images/hqgallery1.png"></div>
    <div class="single-img"><img src="Images/hqgallery2.png"></div>
    <div class="single-img"><img src="Images/hqgallery8.png"></div>
    <div class="single-img"><img src="Images/hqgallery4.png"></div>
    <div class="single-img"><img src="Images/hqgallery3.png"></div>
    <div class="single-img"><img src="Images/hqgallery5.png"></div>
    <div class="single-img"><img src="Images/hqgallery6.png"></div>
    <div class="single-img"><img src="Images/hqgallery7.png"></div>

  </div>
</div>
<div>
  <a href="#" class="gallery-viewmore">
    <p>View more <i class='bx bxs-chevrons-right'></i></p>
  </a>
</div>

<!--Monochrome CEO AND FOUNDER BANNER-->
<div class="ceoheader">
  <h2 id="ourteam">MEET OUR CEO & FOUNDER</h2>
</div>
<div class="ceobanner"></div>
<div class="ceobanner-text">
<p class="ceobanner-description">Monochrome's CEO and Founder, Celia Rhodes isn't just an average CEO. A whirlwind of creativity and business acumen,
    she's become a fashion iconoclast at a young age. She doesn't follow trends, she sets them. Celia saw the endless
    possibilities within the classic palette of black and white, transforming Monochrome Fashion into a symbol of modern rebellion and
    timeless elegance. Her designs are as bold as her vision, a fusion of LA's coolness with a touch of the unexpected.
    <br><br>She isn't just building a fashion brand, she's building a monochrome movement. 
    Celia Rhodes is a force to be reckoned with, a leader who doesn't just talk about disrupting the fashion industry, she's doing it, 
    one perfectly tailored black and white masterpiece at a time. </p>
</div>


<!--OUR TEAM SECTION-->
<section class="team">
  <div class="team-text">
    <h2>OUR TEAM OF DESIGNERS</h2>
  </div>
  <div class="team-content">
    <div class="team-box">
      <img src="Images/team1.png" alt="Team member one">
      <h3>Kiyoko Shimada</h3>
      <div class="team-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <div class="team-box">
      <img src="Images/team3.png" alt="Team member one">
      <h3>Sharon Walters</h3>
      <div class="team-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <div class="team-box">
      <img src="Images/team4.png" alt="Team member one">
      <h3>Nicole Brennan</h3>
      <div class="team-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</section>



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
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>