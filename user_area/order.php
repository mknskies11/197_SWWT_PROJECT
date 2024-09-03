<?php

include ('../config.php');
include ('../functions/common_function.php');

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];

}

//getting total items and total price of all items
$get_ip_address = getIPAddress();
$total_price = 0;
$cart_query_price = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
$result_cart_price = mysqli_query($conn, $cart_query_price);

$invoice_number = mt_rand(); //PHP Math function to generate a random number
$status = 'pending';

$count_products = mysqli_num_rows($result_cart_price);

while($row_price = mysqli_fetch_assoc($result_cart_price)){
    $productID =$row_price['product_id'];
    $select_product = "SELECT * FROM `products` WHERE product_id=$productID";
    $run_price = mysqli_query($conn, $select_product);

    while($row_product_price = mysqli_fetch_array($run_price)){
        $productPrice = array($row_product_price['product_price']);
        $productPrice = array_sum($productPrice);
        $total_price += $productPrice;

    }
}

//getting quantity from cart
$get_cart = "SELECT * FROM `cart_details`";
$run_cart = mysqli_query($conn, $get_cart);
$get_item_quantity = mysqli_fetch_array($run_cart);
$quantity = $get_item_quantity['quantity'];
?>