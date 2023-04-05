<?php
include 'conn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kondektur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
        <a class="navbar-brand" href="index.php">HomePage</a>
        <div class="d-flex">
            <a class="btn btn-outline-light me-3" href="bus.php">Data Bus</a>
            <a class="btn btn-outline-light me-3" href="driver.php">Data Driver</a>
            <a class="btn btn-outline-light me-3" href="kondektur.php">Data Kondektur</a>
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
        <h3 class="mb-0">Data Kondektur</h3>
        <a href="tambah-kondektur.php" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah Data Kondektur</a>
    </div>
    <hr>
    <table class="table table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">Id Kondektur</th>
            <th scope="col">Nama</th>
            <th scope="colz">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM kondektur";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?= $row['id_kondektur'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td>
                    <a href="update-kondektur.php?id_kondektur=<?= $row['id_kondektur'] ?>" class="text-warning me-3"><i class="fas fa-pen-to-square"></i></a>
                    <a href="delete-kondektur.php?id_kondektur=<?= $row['id_kondektur'] ?>" class="text-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zp/a+Ov6Ukg7V8Epk6H+0VU5l5y5Kw8Cr+Hc5bVz5vNlnX7GhgEosPyNgfpuK0Nv" crossorigin="anonymous"></script>
</body>
</html>