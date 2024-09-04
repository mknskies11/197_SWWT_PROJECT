<?php
include('../config.php');
include('../functions/common_function.php');
session_start();

if (isset($_POST['admin_login'])) {
    $admin_username = mysqli_real_escape_string($conn, $_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);

    // Check if the username exists
    $select_query = "SELECT * FROM `admin_table` WHERE admin_name = '$admin_username'";
    $result = mysqli_query($conn, $select_query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if (password_verify($admin_password, $row['admin_password'])) {
            // Set session variables
            $_SESSION['admin_username'] = $admin_username;

            // Alert and redirect to admin_index.php
            echo "<script>
                    alert('Admin Login successful');
                    window.location.href = 'admin_index.php';
                  </script>";
            exit();
        } else {
            echo "<script>alert('Incorrect password, please try again!');</script>";
        }
    } else {
        echo "<script>alert('Admin not found, please check your username!');</script>";
    }
}
?>

<html>

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="form-container mx-auto shadow-lg p-4 rounded bg-light" style="max-width: 500px;">
        <form action="" method="post">
            <h3 class="text-center text-dark mb-4">Admin Login</h3>

            <!-- Username -->
            <div class="mb-3">
                <label for="admin_username" class="form-label">Admin Username:</label>
                <input type="text" id="admin_username" class="form-control" name="admin_username" required
                    placeholder="Enter your username">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="admin_password" class="form-label">Password</label>
                <input type="password" id="admin_password" class="form-control" name="admin_password" required
                    placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-dark w-100" name="admin_login">Login</button>

            <!-- Go to Home Link -->
            <p class="mt-3 text-center">Go to Home <a href="../home.php" class="text-decoration-none">Home</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
