<?php
include 'conn.php';

if(isset($_GET['id_kondektur'])){
    $id_kondektur = $_GET['id_kondektur'];

    $query = "SELECT * FROM kondektur WHERE id_kondektur='$id_kondektur'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['submit'])){
    $id_kondektur = $_POST['id_kondektur'];
    $nama_kondektur = $_POST['nama_kondektur'];
    $alamat_kondektur = $_POST['alamat_kondektur'];
    $no_telp_kondektur = $_POST['no_telp_kondektur'];

    $query = "UPDATE kondektur SET nama_kondektur='$nama_kondektur', alamat_kondektur='$alamat_kondektur', no_telp_kondektur='$no_telp_kondektur' WHERE id_kondektur='$id_kondektur'";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: kondektur.php?msg=Record updated successfully");
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
    <title>Update Kondektur</title>
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
            <h3>Update Data Kondektur</h3>
            <p class="text-muted">Lengkapi Data di Bawah Ini Sebelum Submit</p>
        </div>
        <?php
        if (isset($_GET['id_kondektur'])) {
            $id_kondektur = $_GET['id_kondektur'];
            $sql = "SELECT * FROM kondektur WHERE id_kondektur='$id_kondektur'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
        }
        ?>
        <div class="container d-flex justify-content-center">
            <form action="update-kondektur.php" method="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                        <?php ?>
                        <label class="form-label"> Id Kondektur</label>
                        <input type="text" class="form-control" name="id_kondektur" value="<?php echo $row['id_kondektur'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Nama Kondektur</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit" >Update</button>
                    <a href="kondektur.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>