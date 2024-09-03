<?php
include '../config.php'; 
include '../functions/common_function.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    // Show login form if not logged in
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monochrome: Checkout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="../home.css">
    </head>

    <body>
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="../home.php"><img src="../Images/logo.png" width="50%"></a>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../Images/logo.png" width="70%"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="../home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="../collection.php">Collections</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="../products.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="../contactus.php">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-2" href="../aboutus.php">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Login Form -->
            <div class="container d-flex align-items-center justify-content-center min-vh-100">
                <div class="card p-4 shadow-lg border-0" style="max-width: 400px; width: 100%;">
                    <form action="" method="post">
                        <h3 class="text-center mb-4">Login</h3>
                        <div class="mb-3">
                            <label for="user_username" class="form-label">Username</label>
                            <input type="text" id="user_username" class="form-control" name="user_username" required
                                placeholder="Enter username">
                        </div>
                        <div class="mb-3">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="password" id="user_password" class="form-control" name="user_password" required
                                placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-dark w-100" name="user_login">Login</button>
                        <p class="text-center mt-3">Don\'t have an account? <a href="user_registration.php">Register</a></p>
                        <p class="mt-3 text-center">Go back to <a href="../home.php" class="text-decoration-none">Home</a></p>
                    </form>
                </div>
            </div>
        </header>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
    </html>';

    // Handle login submission
    if (isset($_POST['user_login'])) {
        $user_username = $_POST['user_username'];
        $user_password = $_POST['user_password'];

        $select_query = "SELECT * FROM `user_table` WHERE user_name='$user_username'";
        $result = mysqli_query($conn, $select_query);
        $row_count = mysqli_num_rows($result);
        $row_data = mysqli_fetch_assoc($result);
        $user_ip = getIPAddress();

        // If user exists
        if ($row_count > 0) {
            $_SESSION['user_name'] = $user_username;
            if (password_verify($user_password, $row_data['user_password'])) {
                echo "<script>alert('Login successful!'); window.location.href='payment.php';</script>";
            } else {
                echo "<script>alert('Invalid credentials, please try again!');</script>";
            }
        } else {
            echo "<script>alert('Invalid credentials, please try again!');</script>";
        }
    }

    exit(); // Stop the script here if user is not logged in
}

// If logged in, display checkout content
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monochrome: Checkout</title>
    <!-- Add your CSS links here -->
</head>

<body>
    <!-- Add the checkout form or any other content for logged-in users -->
    <h2>Welcome to the checkout page!</h2>
    <!-- Your checkout form goes here -->
</body>

</html>
