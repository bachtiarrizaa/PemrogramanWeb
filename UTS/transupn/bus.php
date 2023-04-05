<?php
include 'conn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus</title>
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
        <h3 class="mb-0">Data Bus</h3>
        <a href="tambah-bus.php" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah Data Bus</a>
    </div>
    <hr>
    <form method="GET">
        <div class="mb-3">
            <label for="status" class="form-label">Filter berdasarkan status:</label>
            <select class="form-select" id="status" name="status">
                <option value="">-- Pilih status --</option>
                <option value="0">0 - Perbaikan</option>
                <option value="1">1 - Aktif</option>
                <option value="2">2 - Cadangan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Tampilkan</button>
    </form>
    <table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id Bus</th>
            <th scope="col">Plat Nomor</th>
            <th scope="col">Status</th>
            <th scope="col">Jumlah KM</th>
            <th scope="colz">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $status_filter = '';
        if (isset($_GET['status'])) {
            $status_filter = $_GET['status'];
        }
        $query = "SELECT bus.id_bus, bus.plat, COALESCE(SUM(trans_upn.jumlah_km), 0) AS jumlah_km, bus.status FROM bus LEFT JOIN trans_upn ON bus.id_bus = trans_upn.id_bus";
        if (!empty($status_filter)) {
            $query .= " WHERE bus.status = $status_filter";
        }
        $query .= " GROUP BY bus.id_bus";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <tr>
                <td><?= $row['id_bus'] ?></td>
                <td><?= $row['plat'] ?></td>
                <td>
                    <?php
                    $status = $row['status'];
                    if ($status == 0) {
                        echo '<span class="badge bg-danger">0</span>';
                    } elseif ($status == 1) {
                        echo '<span class="badge bg-success">1</span>';
                    } elseif ($status == 2) {
                        echo '<span class="badge bg-warning">2</span>';
                    }
                    ?>
                </td>
                <td><?= $row['jumlah_km'] ?></td>
                <td>
                    <a href="update-bus.php?id_bus=<?= $row['id_bus'] ?>" class="text-warning me-3"><i class="fas fa-pen-to-square"></i></a>
                    <a href="delete-bus.php?id_bus=<?= $row['id_bus'] ?>" class="text-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zp/a+Ov6Ukg7V8Epk6H+0VU5l5y5Kw8Cr+Hc5bVz5vNlnX7GhgEosPyNgfpuK0Nv" crossorigin="anonymous"></script>
</body>
</html>