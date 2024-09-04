<?php
// Start the session only if it hasn't been started already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once '../config.php';
include_once '../functions/common_function.php';

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header('Location: user_login.php'); // Redirect to login page if not logged in
    exit();
}

// Fetch current user details for the form
$currentUsername = $_SESSION['user_name'];
$user_query = "SELECT * FROM user_table WHERE user_name='$currentUsername'";
$user_result = mysqli_query($conn, $user_query);
$user = mysqli_fetch_array($user_result);

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Check if a new image has been uploaded
    $update_image_query = '';
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_folder = "../user_area/user_images/";

        // Validate and move the uploaded image file
        if (move_uploaded_file($image_tmp, $image_folder . $image)) {
            $update_image_query = ", user_image='$image'";
        } else {
            echo "<script>alert('Error uploading image. Please try again.');</script>";
        }
    }

    // Update user details in the database
    $update_query = "UPDATE user_table SET 
                     user_name='$username', 
                     user_email='$email', 
                     user_address='$address' 
                     $update_image_query
                     WHERE user_name='$currentUsername'";

    if (mysqli_query($conn, $update_query)) {
        // Update the session username if it has been changed
        $_SESSION['user_name'] = $username;
        echo "<script>alert('Account updated successfully!'); window.location.href='profile2.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../home.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
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

<div class="form-container">
    <h2>Edit Account</h2>
    <form action="edit_account.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($user['user_name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['user_email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($user['user_address']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <?php if (!empty($user['user_image'])): ?>
                <img src="../user_area/user_images/<?php echo htmlspecialchars($user['user_image']); ?>" alt="User Image" class="mt-2" width="100">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-custom">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
