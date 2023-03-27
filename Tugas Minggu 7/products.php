<?php
include 'conn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <style>
        /* CSS untuk menyesuaikan tampilan */
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
            color: white;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .fa-pen-to-square, .fa-trash {
            cursor: pointer;
        }
        .fa-pen-to-square:hover, .fa-trash:hover {
            color: #dc3545;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Database Classicmodels</a>
        <div class="d-flex">
            <a class="btn btn-outline-light me-3" href="customers.php">Customers</a>
            <a class="btn btn-outline-light" href="products.php">Products</a>
        </div>
    </div>
</nav>

<div class="container my-5" style="overflow-x: auto;">
    <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_GET['msg'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Products</h3>
        <a href="tambah-products.php" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <hr>
    <table class="table table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">Product Code</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Line</th>
            <th scope="col">Product Scale</th>
            <th scope="col">Product Vendor</th>
            <th scope="col">Product Description</th>
            <th scope="col">Quantity In Stock</th>
            <th scope="col">Buy Price</th>
            <th scope="col">MSRP</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?= $row['productCode'] ?></td>
                <td><?= $row['productName'] ?></td>
                <td><?= $row['productLine'] ?></td>
                <td><?= $row['productScale'] ?></td>
                <td><?= $row['productVendor'] ?></td>
                <td><?= $row['productDescription'] ?></td>
                <td><?= $row['quantityInStock'] ?></td>
                <td><?= $row['buyPrice'] ?></td>
                <td><?= $row['MSRP'] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zp/a+Ov6Ukg7V8Epk6H+0VU5l5y5Kw8Cr+Hc5bVz5vNlnX7GhgEosPyNgfpuK0Nv" crossorigin="anonymous"></script>
</body>
</html>