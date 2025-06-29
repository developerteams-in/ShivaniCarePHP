<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-12 col-md-3 col-lg-2 bg-light vh-50 vh-md-100 d-flex flex-column p-3">
      <button class="btn btn-info d-md-none mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
        Toggle Menu
      </button>
      <div class="collapse d-md-block bg-light" id="sidebarMenu">
        <h4 class="mb-4">Menu</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">User List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product List</a>
          </li>
          <li class="nav-item d-block d-sm-block d-md-none mt-5">
            <a class="nav-link btn btn-danger text-white" href="logout.php">Exit</a>
          </li>
          <li class="nav-item d-none d-md-block position-fixed bottom-0 mb-5">
            <a class="nav-link btn btn-danger text-white" href="logout.php">Exit</a>
          </li>
        </ul>
      </div>
    </div>
 
    <!-- Main Content -->
    <div class="col-12 col-md-9 col-lg-10">
      <div class="container mt-5">
        <h2 class="text-center">New Product Entry</h2>
 
        <!-- Flash Message Example (can be removed or updated) -->
        <div class="alert alert-success">
          Product added successfully!
        </div>
        <div class="alert alert-danger">
          <p>Error 1: Please fill all fields.</p>
          <p>Error 2: Image is required.</p>
        </div>
 
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName" required>
          </div>
 
          <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription" rows="4" required></textarea>
          </div>
 
          <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice" step="0.01" required>
          </div>
 
          <div class="mb-3">
            <label for="productCategory" class="form-label">Product Category</label>
            <select class="form-select" id="productCategory" name="productCategory" required style="width:50%">
              <option value="" disabled selected>Select a category</option>
              <option value="newarrivals">New Arrivals</option>
              <option value="ladies">Makeup</option>
              <option value="men">Skincare</option>
              <option value="kids">Haircare</option>
              <option value="sport">Fragrance</option>
            </select>
          </div>
 
          <div class="mb-3">
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" required>
          </div>
 
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Add Product</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>