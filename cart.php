<?php
include 'config.php';
include 'functions/common_function.php';
session_start();

// Function to REMOVE items
function remove_cart_items()
{
    global $conn;
    if (isset($_POST['remove_cart'])) {
        foreach ($_POST['remove_item'] as $remove_id) {
            $delete_query = "DELETE FROM `cart_details` WHERE product_id = $remove_id";
            $run_delete = mysqli_query($conn, $delete_query);

            if ($run_delete) {
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}

// Checkout redirection logic
if (isset($_POST['checkout'])) {
    if (isset($_SESSION['user_name'])) {
        // Redirect to payment page if logged in
        header("Location: user_area/payment.php");
        exit();
    } else {
        // Prompt to log in if not logged in
        echo "<script>alert('Please log in to proceed to checkout.'); window.location.href='user_area/user_login.php';</script>";
        exit();
    }
}

remove_cart_items();
?>
<html>
<head>
    <title>Monochrome: Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
<!-- Bootstrap Navbar starts here -->
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
            <?php
            if (!isset($_SESSION['user_name'])) {
                echo "<p>Guest</p>";
            } else {
                echo "<p>{$_SESSION['user_name']}</p>";
            }
            ?>

            <a href="user_area/profile2.php" class="text-dark me-3"><i class='bx bx-user bx-sm'></i></a>
            <a href="#" class="text-dark me-3" style="text-decoration: none;"><i class="bx bx-cart bx-sm"></i> <?php cart_item(); ?></a>
        </div>

        <?php
        if (!isset($_SESSION['user_name'])) {
            echo "<a href='user_area/user_login.php' class='login-button'>Login</a>";
        } else {
            echo "<a href='user_area/logout.php' class='login-button'>Logout</a>";
        }
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Bootstrap Navbar ends here -->

<?php
// Calling cart function
cart();
?>

<!-- CART TABLE -->
<div class="cart-container">
    <div class="cart-row">
        <form action="" method="post">
            <table class="table-bordered text-center">
                <?php
                $get_ip_add = getIPAddress();
                $total_price = 0;
                $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
                $result = mysqli_query($conn, $cart_query);
                $result_count = mysqli_num_rows($result);

                if ($result_count > 0) {
                    echo "<thead>
                        <tr>
                            <th>Title</th>
                            <th>Outfit</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Remove Items</th>
                            <th>Update Cart</th>
                        </tr>
                    </thead>
                    <tbody>";

                    while ($row = mysqli_fetch_array($result)) {
                        $productID = $row['product_id'];
                        $select_products = "SELECT * FROM `products` WHERE product_id='$productID'";
                        $result_products = mysqli_query($conn, $select_products);

                        while ($row_product_price = mysqli_fetch_array($result_products)) {
                            $productPrice = array($row_product_price['product_price']);
                            $price_table = $row_product_price['product_price'];
                            $productTitle = $row_product_price['product_title'];
                            $productImage = $row_product_price['product_image'];
                            $product_values = array_sum($productPrice);
                            $total_price += $product_values;
                            ?>

                            <tr>
                                <td><?php echo $productTitle ?></td>
                                <td><img src="Images/<?php echo $productImage ?>"></td>
                                <td><input type="text" name="quantity"></td>
                                <?php
                                if (isset($_POST['update_cart'])) {
                                    $quantities = $_POST['quantity'];
                                    $update_cart = "UPDATE `cart_details` SET quantity = $quantities WHERE ip_address='$get_ip_add'";
                                    $result_products_quantity = mysqli_query($conn, $update_cart);
                                    $total_price = $total_price * $quantities;
                                }
                                ?>

                                <td>$<?php echo $price_table ?></td>
                                <td>
                                    <input type="checkbox" name="remove_item[]" value="<?php echo $productID ?>">
                                    <input type="submit" value="Remove" class="button-action" name="remove_cart">
                                </td>
                                <td>
                                    <input type="submit" value="Update" class="button-action" name="update_cart">
                                </td>
                            </tr>

                            <?php
                        }
                    }
                } else {
                    echo "<p class='text-center'>There are no items currently in the cart</p>";
                }
                ?>
                </tbody>
            </table>

            <!-- Subtotal and Buttons -->
            <div>
                <br>
                <h6 class="px-3">Total Price: $ <?php echo $total_price ?></h6>
                <button class="button-action"><a href="products.php" style="text-decoration: none; color: #ffffff;">Continue exploring</a></button>
                <button type="submit" name="checkout" class="button-action" style="color: #ffffff;">Checkout</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
