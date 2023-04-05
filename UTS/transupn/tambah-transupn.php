<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO trans_upn(`id_kondektur`, `id_bus`, `id_driver`,'jumlah_km','tanggal') VALUES ('$id_kondektur', '$id_bus', '$id_driver','$jumlah_km','$tanggal')";


    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: transupn.php?msg=New record created successfully");
    }
}

$query = "SELECT * FROM kondektur";
$kondektur = mysqli_query($conn, $query);

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
    <title>Tambah Trans UPN</title>
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
            <h3>Tambah Data Trans UPN</h3>
            <p class="text-muted">Lengkapi Data di Bawah Ini Sebelum Submit</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="tambah-transupn.php" method="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                    <label for="id_kondektur" class="mx-2">ID Kondektur</label>
                    <select class="form-select" id="id_kondektur" name="id_kondektur">
                        <?php while ($data = mysqli_fetch_array($kondektur)) : ?>
                            <option value="<?php echo $data['id_kondektur']; ?>"><?php echo $data['id_kondektur']; ?></option>
                        <?php endwhile; ?>
                    </select>
                    </div>

                    <?php
                    $query = "SELECT * FROM bus";
                    $bus = mysqli_query($conn, $query);
                    ?>
                    <div class="col">
                        <label for="id_bus" class="mx-2">ID bus</label>
                    <select class="form-select" id="id_bus" name="id_bus">
                        <?php while ($data = mysqli_fetch_array($bus)) : ?>
                            <option value="<?php echo $data['id_bus']; ?>"><?php echo $data['id_bus']; ?></option>
                        <?php endwhile; ?>
                    </select>
                    </div>
                </div>

                <?php
                $query = "SELECT * FROM driver";
                $driver = mysqli_query($conn, $query);
                ?>
                <div class="mb-3">
                <label for="id_driver" class="mx-2">ID Driver</label>
                    <select class="form-select" id="id_driver" name="id_driver">
                        <?php while ($data = mysqli_fetch_array($driver)) : ?>
                            <option value="<?php echo $data['id_driver']; ?>"><?php echo $data['id_driver']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                <label for="jumlah_km" class="mx-2">Jumlah KM</label>
                    <input type="number" class="form-control" id="jumlah_km" placeholder="Jumlah KM" name="jumlah_km">
                </div>

                <div class="mb-3">
                <label for="tanggal" class="mx-2">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" placeholder="Jumlah KM" name="tanggal">
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