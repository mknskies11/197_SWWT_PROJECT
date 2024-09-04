<?php
include('../config.php');

if(isset($_POST['addProduct_submit'])){
  $productTitle = $_POST['product_title'];
  $productKeywords = $_POST['product_keywords'];
  $productCategories = $_POST['product_categories'];
  $productPrice = $_POST['product_price'];
  $productStatus = 'true';

  //accessing images
  $productImage = $_FILES['product_image']['name'];

  //accessing image temporary name
  $productTempImage = $_FILES['product_image']['tmp_name'];

  //checking empty condition
  if($productTitle == '' or $productKeywords == '' or $productCategories == '' or $productPrice == '' or $productImage == ''){
    echo "<script>alert('Please fill all the fields')</script>";
    exit();
  }
  else{
    move_uploaded_file($productTempImage, "./product_images/$productImage");

    //insert query
    $insert_product = "INSERT INTO `products` (product_title,product_keywords,category_id,product_image,product_price,date,status) VALUES ('$productTitle','$productKeywords','$productCategories','$productImage','$productPrice',NOW(),'$productStatus')";
    $result_query = mysqli_query($conn, $insert_product);

    if($result_query){
      echo "<script>alert('Product has been added successfully!')</script>";
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--Bootstrap Navbar starts here-->
<header>
  <nav class="navbar navbar-expand-lg fixed-top">
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
              <a class="nav-link mx-lg-2" aria-current="page" href="add_category.php">Add Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-lg-2" aria-current="page" href="add_products.php">Add Products</a>
            </li>
          </ul>
        </div>
      </div>

      <a href="admin_index.php" class="login-button">Admin Dashboard</a>
      <a href="../user_area/logout.php" class="login-button">Logout</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
  <!--Bootstrap Navbar ends here-->


    <!--Add products form starts here-->
    <div class="form-container">
    <form action="" method="post" enctype="multipart/form-data">
    <h3>Add Products</h3>

    <!--Product Title-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_title" class="form-label">Product Title</label>
      <input type="text" name="product_title" id="product-title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
    </div>

        <!--Product Keywords-->
        <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_keywords" class="form-label">Product Keywords</label>
      <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Keywords (Separate by commas)" autocomplete="off" required="required">
    </div>

    <!--Categories-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_categories" class="form-label">Category</label>
      <select name="product_categories" class="form-select">
        <option value="">--Select Category--</option>

        <?php //php code 
            $select_query = "SELECT * FROM `categories` ";
            $result_query = mysqli_query($conn, $select_query);

            while($row = mysqli_fetch_assoc($result_query)){
              $categoryTitle = $row['category_title'];
              $category_id = $row['category_id'];
              echo "<option value='$category_id'>$categoryTitle</option>";
            }
        
        ?>
        <!-- <option value="">Blazers and Jackets</option>
        <option value="">C3</option>
        <option value="">C4</option> -->
      </select>
    </div>

    <!--Image-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_image" class="form-label">Product Image</label>
      <input type="file" name="product_image" id="product_image" class="form-control" required="required">
    </div>

    <!--Price-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Price" autocomplete="off" required="required">
    </div>

    <!--Button-->
    <input type="submit" name="addProduct_submit" value="Add" class="form-btn" style="width: 50%;">

    </form>
  </div>


  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<body>
    
</body>
</html>