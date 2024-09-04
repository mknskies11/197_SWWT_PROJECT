<?php
include('../config.php');
include('../functions/common_function.php');
?>
<html>

<head>
  <title>Admin Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <!-- Registration form starts here -->
    <div class="form-container mx-auto shadow-lg p-4 rounded bg-light" style="max-width: 500px;">
      <form action="" method="post" enctype="multipart/form-data">
        <h3 class="text-center text-dark mb-4">Admin Register</h3>

        <!-- Username -->
        <div class="mb-3">
          <label for="user_username" class="form-label">Admin Username:</label>
          <input type="text" id="user_username" class="form-control" autocomplete="off" name="admin_username" required
            placeholder="Enter your username">
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="user_email" class="form-label">Admin Email</label>
          <input type="email" id="user_email" class="form-control" autocomplete="off" name="admin_email" required
            placeholder="Enter your email">
        </div>

        <!-- Profile Image -->
        <div class="mb-3">
          <label for="user_image" class="form-label">Admin Profile Image</label>
          <input type="file" id="user_image" class="form-control" name="admin_image" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="user_password" class="form-label">Password</label>
          <input type="password" id="user_password" class="form-control" name="admin_password" required
            placeholder="Enter a password">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
          <label for="conf_user_password" class="form-label">Confirm Password</label>
          <input type="password" id="conf_user_password" class="form-control" name="conf_admin_password" required
            placeholder="Confirm password">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-dark w-100" name="user_register">Register</button>

        <!-- Login Link -->
        <p class="mt-3 text-center">OR <a href="admin_login.php" class="text-decoration-none">Login</a></p>
        <p class="mt-3 text-center">Go to Home <a href="../home.php" class="text-decoration-none">Home</a></p>
      </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>

<!-- PHP code -->
<?php
if (isset($_POST['user_register'])) {
    // Collect form data
    $admin_username = $_POST['admin_username'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $hash_password = password_hash($admin_password, PASSWORD_DEFAULT);
    $conf_admin_password = $_POST['conf_admin_password'];
    $admin_image = $_FILES['admin_image']['name'];
    $admin_image_tmp = $_FILES['admin_image']['tmp_name'];
    $admin_ip = getIPAddress();

    // Validation for existing username or email
    $select_query = "SELECT * FROM `admin_table` WHERE admin_name='$admin_username' OR admin_email='$admin_email'";
    $result = mysqli_query($conn, $select_query);
    $rows_count = mysqli_num_rows($result);

    if ($rows_count > 0) {
        echo "<script>alert('Username or Email already exists');</script>";
    } elseif ($admin_password != $conf_admin_password) {
        echo "<script>alert('Passwords do not match, please try again!');</script>";
    } else {
        // Attempt to move the uploaded image
        if (move_uploaded_file($admin_image_tmp, "admin_images/$admin_image")) {
            // Insert data into the database
            $insert_query = "INSERT INTO `admin_table` (admin_name, admin_email, admin_password, admin_image, admin_ip) 
                             VALUES ('$admin_username', '$admin_email', '$hash_password', '$admin_image', '$admin_ip')";

            $sql_execute = mysqli_query($conn, $insert_query);

            // Check if the insertion was successful
            if ($sql_execute) {
                echo "<script>alert('Admin registration is successful!');</script>";
            } else {
                echo "<script>alert('Error in registration. Please try again later.');</script>";
            }
        } else {
            echo "<script>alert('Error uploading image. Please try again.');</script>";
        }
    }
}
?>
