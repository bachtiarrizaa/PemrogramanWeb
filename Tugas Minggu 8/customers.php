<?php include('conn.php');
$status = 'ok';
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
        <?php
            if (isset($_GET['status']) && $status == 'ok') {
                echo '<div class="alert alert-success mx-3" role="alert">
                Berhasil DiUpdate
              </div>';
            }else if (isset($_GET['status'])&& $status == 'err') {
                echo '<div class="alert alert-danger mx-3" role="alert">
                Gagal DiUpdate
              </div>';
            }
        ?>
        <div class="d-flex justify-content-between align-items-center ">
            <h3 class="mb-0">Customers</h3>
            <a href="add-customers.php" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Customers</a>
        </div>
        <hr>
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Contact Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">PostCode</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php $query = "SELECT * FROM customers";
                $result = $conn->query($query);
                $i = 1;
                ?>
                <?php while ($data = $result->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <th scope="row"><?php echo $i;
                                        $i++; ?></th>
                        <td><?php echo $data['customerName']; ?></td>
                        <td><?php echo ($data['contactFirstName'] . ' ' . $data['contactLastName']); ?></td>
                        <td><?php echo $data['country']; ?></td>
                        <td><?php echo $data['city']; ?></td>
                        <td><?php echo $data['addressLine1']; ?></td>
                        <td><?php echo $data['postalCode']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td>
                            <a href="update-customers.php?customerNumber=<?= $data['customerNumber'] ?>" class="text-warning me-3"><i class="fas fa-pen-to-square"></i></a>
                            <a href="delete-customers.php?customerNumber=<?= $data['customerNumber'] ?>" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>