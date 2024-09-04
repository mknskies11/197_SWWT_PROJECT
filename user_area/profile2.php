<?php
include '../config.php';
include '../functions/common_function.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_name'])) {
    header('Location: user_login.php'); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monochrome: User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../home.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            padding: 20px;
            background-color: #000000;
            color: #ffffff;
            border-radius: 8px 8px 0 0;
        }

        .profile-header img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }

        .profile-content {
            padding: 20px;
        }

        .profile-content table {
            width: 100%;
        }

        .btn-custom {
            background-color: #000000;
            color: #ffffff;
            border: none;
        }

        .btn-custom:hover {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
</head>

<body>

    <!--Bootstrap navigation bar begins here-->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="../home.php"><img src="../Images/logo.png" width="50%"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../Images/logo.png" width="70%">
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2" aria-current="page"
                                    href="../home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="../collection.php">Collections</a>
                            </li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="../products.php">Products</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="../contactus.php">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="../aboutus.php">About Us</a></li>
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

                    <a href="#" class="text-dark me-3"><i class='bx bx-user bx-sm'></i></a>
                    <a href="cart.php" class="text-dark me-3" style="text-decoration: none;"><i
                            class="bx bx-cart bx-sm"></i> <?php cart_item(); ?></a>
                    <p>Total Price: $<?php total_cart_price(); ?></p>
                </div>

                <?php
                if (!isset($_SESSION['user_name'])) {
                    echo "<a href='user_login.php' class='login-button'>Login</a>";
                } else {
                    echo "<a href='logout.php' class='login-button'>Logout</a>";
                }
                ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!--Bootstrap Navbar ends here-->
    </header>

    <div class="profile-container">
        <div class="profile-header">
            <?php
            $username = $_SESSION['user_name'];
            $user_query = "SELECT user_image FROM user_table WHERE user_name='$username'";
            $user_result = mysqli_query($conn, $user_query);
            if ($user_result && mysqli_num_rows($user_result) > 0) {
                $row_image = mysqli_fetch_array($user_result);
                $user_image = $row_image['user_image'];
                echo "<img src='../user_area/user_images/$user_image' alt='User Image'>";
            } else {
                echo "<img src='../Images/default_user_image.jpg' alt='Default User Image'>";
            }
            ?>

            <br><br>
            <h2>Your Profile</h2>
        </div>

        <div class="profile-content">
            <table class="table">
                <tbody>
                    <tr>
                        <td><a href="profile2.php?edit_account=true" class="btn btn-custom w-100">Edit Account</a></td>
                    </tr>
                    <tr>
                        <td><a href="?view_orders=true" class="btn btn-custom w-100">Pending Orders</a></td>
                    </tr>
                    <tr>
                        <td><a href="logout.php" class="btn btn-custom w-100">Logout</a></td>
                    </tr>

                    <?php
                    // Check if view_orders parameter is set and display order details
                    if (isset($_GET['view_orders']) && $_GET['view_orders'] == 'true') {
                        get_user_order_details();
                    }

                    // Check if edit_account parameter is set and include edit_account.php
                    if (isset($_GET['edit_account']) && $_GET['edit_account'] == 'true') {
                        include('edit_account.php');
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>