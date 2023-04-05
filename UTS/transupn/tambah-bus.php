<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $id_bus = $_POST['id_bus'];
    $plat = $_POST['plat'];
    $status = $_POST['status'];

    $query = "INSERT INTO bus(`id_bus`, `plat`, `status`) VALUES ('$id_bus', '$plat', '$status')";


    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: bus.php?msg=New record created successfully");
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- font awesome -->
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
    </style>
    <title>Tambah Bus</title>
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
    <div class="container">
        <div class="text-center mb-3 justify-content-center" style="margin-top: 50px;">
            <h3>Tambah Data Bus</h3>
            <p class="text-muted">Lengkapi Data di Bawah Ini Sebelum Submit</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="tambah-bus.php" method="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"> Id Bus</label>
                        <input type="text" class="form-control" id="id_bus" name="id_bus" placeholder="Id Bus">
                    </div>
                    <div class="col">
                        <label class="form-label">Plat</label>
                        <input type="text" class="form-control" id="plat" name="plat" placeholder="Plat">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="0">0-Perbaikan</option>
                            <option value="1">1-Aktif</option>
                            <option value="2">2-Cadangan</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                    <a href="bus.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>