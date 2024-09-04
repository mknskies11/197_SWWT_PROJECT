<?php
include '../config.php';
include '../functions/common_function.php';
    
// Handle Edit User Request
if (isset($_POST['edit_user'])) {
  $id = $_POST['edit_id'];
  $name = $_POST['edit_name'];
  $email = $_POST['edit_email'];
  $address = $_POST['edit_address'];

  $updateQuery = "UPDATE user_table SET name='$name', email='$email', address='$address' WHERE id=$id";
  $conn->query($updateQuery);
  header("Location: admin_dashboard.php"); // Refresh to update table
}

// Handle Delete User Request
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $deleteQuery = "DELETE FROM user_table WHERE id=$id";
  $conn->query($deleteQuery);
  header("Location: admin_dashboard.php"); // Refresh to update table
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/backend.css">
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
              <a class="nav-link active mx-lg-2" aria-current="page" href="add_category.php">Add Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" aria-current="page" href="add_products.php">Add Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="admin_products.php">View Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="products.php">All Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="contactus.php">All Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="aboutus.php">Users</a>
            </li>
          </ul>
        </div>
      </div>

      <a href="admin_index.php" class="login-button">Admin Dashboard</a>
      <a href="../logout.php" class="login-button">Logout</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
  <!--Bootstrap Navbar ends here-->

<div class="container mt-5 pt-5">
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all users
            $result = $conn->query("SELECT * FROM user_table");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['user_id']; ?></td>
                <td><?= $row['user_name']; ?></td>
                <td><?= $row['user_email']; ?></td>
                <td><?= $row['user_address']; ?></td>
                <td>
                    <button class="btn btn-warning btn-sm edit-btn" data-id="<?= $row['user_id']; ?>" data-name="<?= $row['user_name']; ?>" data-email="<?= $row['user_email']; ?>" data-user_type="<?= $row['user_address']; ?>" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                    <a href="admin_dashboard.php?delete=<?= $row['user_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="admin_dashboard.php" method="POST">
                    <input type="hidden" id="edit_id" name="edit_id">
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="edit_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit_email" name="edit_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="edit_address" name="edit_address" required>
                    </div>
                    
                    <button type="submit" name="edit_user" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- JavaScript to Fill Modal with User Data -->
<script>
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('edit_id').value = this.getAttribute('data-id');
            document.getElementById('edit_name').value = this.getAttribute('data-name');
            document.getElementById('edit_email').value = this.getAttribute('data-email');
            document.getElementById('edit_address').value = this.getAttribute('data-address');
        });
    });
</script>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
