<?php
include 'conn.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <style>
        
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
        <div class="d-flex justify-content-between align-items-center ">
            <h3 class="mb-0">Customers</h3>
            <a href="tambah-customers.php" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <hr>
        <table class="table table-hover" style="white-space: nowrap;">
            <thead class="table-dark">
                <tr>
                <th scope="col">customer Number</th>
                <th scope="col">customer Name</th>
                <th scope="col">contact Last Name</th>
                <th scope="col">contact First Name</th>
                <th scope="col">phone</th>
                <th scope="col">address Line 1</th>
                <th scope="col">address Line 2</th>
                <th scope="col">city</th>
                <th scope="col">state</th>
                <th scope="col">postal Code</th>
                <th scope="col">country</th>
                <th scope="col">sales Rep Employee Number</th>
                <th scope="col">credit Limit</th>
            </thead>
            <tbody>
                <?php
                include 'conn.php';

                $query = "SELECT * FROM customers";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th><?php echo $row['customerNumber']?></th>
                        <th><?php echo $row['customerName']?></th>
                        <th><?php echo $row['contactLastName']?></th>
                        <th><?php echo $row['contactFirstName']?></th>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['addressLine1']; ?></td>
                        <td><?php echo $row['addressLine2']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['postalCode']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['salesRepEmployeeNumber']; ?></td>
                        <td><?php echo $row['creditLimit']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>