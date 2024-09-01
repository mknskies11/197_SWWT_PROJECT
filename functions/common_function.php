<?php
include 'config.php';

//getting products
function getProducts(){
    global $conn;
    
  $select_query = "SELECT * FROM `products` ORDER BY rand()";
  $result_query = mysqli_query($conn, $select_query);
//   $row = mysqli_fetch_assoc($result_query);
//   echo $row['product_title'];

  while($row = mysqli_fetch_assoc($result_query)){
     $productID = $row['product_id'];
     $productTitle = $row['product_title'];
     $productImage = $row['product_image'];
     $productPrice = $row['product_price']; 
     $categoryID = $row['category_id']; 
     echo "<div class='product-box'>
        <img src='admin_area/product_images/$productImage'>
          <h5>$productTitle</h5>
          <h6 class='price'>$productPrice</h6>
          <a href='products.php?add_to_cart=$productID'><i class='bx bxs-shopping-bag-alt' ></i></a>
        </div>";

  }
  
}

//getting IP ADDRESS function
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $conn;
  $get_ip_add = getIPAddress();
  $get_product_id = $_GET['add_to_cart'];

  $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
  $result_query = mysqli_query($conn, $select_query);

  $num_of_rows = mysqli_num_rows($result_query);
if($num_of_rows > 0){
    echo "<script>alert('This item is already in the cart')</script>";
    echo "<script>window.open('products.php','_self')</script>";
  }else{
    $insert_query = "INSERT INTO `cart_details` (product_id,ip_address,quantity) VALUES ($get_product_id, '$get_ip_add',0)";
    $result_query = mysqli_query($conn, $insert_query);
    echo "<script>alert('Successfully added to the cart!')</script>";
    echo "<script>window.open('products.php','_self')</script>";
  }
}
}
?>  