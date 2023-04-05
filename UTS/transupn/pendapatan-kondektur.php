<!DOCTYPE html>
<html>
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
    <title>Pendapatan Kondektur</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">HomePage</a>
        <div class="d-flex">
            <a class="btn btn-outline-light me-3" href="pendapatan-driver.php">Pendapatan Driver</a>
            <a class="btn btn-outline-light me-3" href="pendapatan-kondektur.php">Pendapatan Kondektur</a>
        </div>
    </div>
</nav>
<div class="container my-5" style="overflow-x: auto;">
    <div class="d-flex justify-content-between align-items-center">
    <h3 class="mb-0">Pendapatan Kondektur</h3>
    <form method="GET">
        <div class="mb-3 d-inline-block">
        <label for="bulan" class="form-label">Filter berdasarkan bulan:</label>
        <select class="form-select" id="bulan" name="bulan">
            <option value="">-- Pilih bulan --</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2 d-inline-block">Tampilkan</button>
    </form>
    </div>
    <hr>
    <table class="table table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">Nama Kondektur</th>
            <th scope="col">Bulan</th>
            <th scope="colz">Jumlah KM</th>
            <th scope="colz">Total Gaji</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "conn.php";

        if(isset($_GET['bulan'])){
            $bulan = $_GET['bulan'];
            $query = "SELECT kondektur.nama,  MONTHNAME(trans_upn.tanggal) as bulan, trans_upn.jumlah_km, SUM(trans_upn.jumlah_km * 1500) as total_gaji_bulanan 
                        FROM trans_upn 
                        INNER JOIN kondektur ON trans_upn.id_kondektur = kondektur.id_kondektur 
                        WHERE MONTH(trans_upn.tanggal) = $bulan
                        GROUP BY kondektur.nama,MONTH(trans_upn.tanggal)";
        } else {
            $query = "SELECT kondektur.nama,  MONTHNAME(trans_upn.tanggal) as bulan, trans_upn.jumlah_km, SUM(trans_upn.jumlah_km * 1500) as total_gaji_bulanan 
                        FROM trans_upn 
                        INNER JOIN kondektur ON trans_upn.id_kondektur = kondektur.id_kondektur 
                        GROUP BY kondektur.nama,MONTH(trans_upn.tanggal)";
        }
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['bulan'] ?></td>
                <td><?= $row['jumlah_km'] ?></td>
                <td><?= $row['total_gaji_bulanan'] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
	
</body>
</html>