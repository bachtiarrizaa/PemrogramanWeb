<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        
        h2 {
            text-align: center;
        }
        
        form {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-actions {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-button {
        text-align: center;
        width: 100%;
        }
        
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 260px;
            padding: 3px;
            border: 1px solid #ccc;
            border-radius: 1px;
        }
        
        a {
            font-size: 15px;
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Edit Buku Perpustakaan</h2>
    <?php
    if (isset($_GET["kode"])) {
        $kodebuku = $_GET["kode"];

        $file = file("buku.txt", FILE_SKIP_EMPTY_LINES);
        $buku = null;

        foreach ($file as $line) {
            $data = explode("|", $line);
            if ($data[0] == $kodebuku) {
                $buku = $data;
                break;
            }
        }

        if (!$buku) {
            echo "Buku tidak ditemukan.";
            exit;
        }

        $judul = $buku[1];
        $pengarang = $buku[2];
        $tahunterbit = $buku[3];
        $penerbit = $buku[4];
        $jumhalaman = $buku[5];
        $kategori = $buku[6];
        $sampul = $buku[7];
    }
    ?>

    <form method="post" action="aksi-edit.php" enctype="multipart/form-data">
        <input type="hidden" name="kode_buku" value="<?php echo $kodebuku; ?>">
        <label>Judul Buku</label>
        <input type="text" name="judul" value="<?php echo $judul; ?>">
        <br><br>
        <label>Pengarang</label>
        <input type="text" name="pengarang" value="<?php echo $pengarang; ?>">
        <label>Tahun Terbit</label>
        <input type="text" name="tahun_terbit" value="<?php echo $tahunterbit; ?>">
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?php echo $penerbit; ?>">
        <br><br>
        <label>Jumlah Halaman</label>
        <input type="text" name="jum_halaman" value="<?php echo $jumhalaman; ?>">
        <label>Kategori</label>
        <input type="text" name="kategori" value="<?php echo $kategori; ?>">
        <br><br>
        <label>Sampul</label>
        <input type="file" name="sampul" accept="image/*">
        <br><br>
        <div class="form-actions">
            <div class="center-button">
                <a href="index.php">Kembali</a>
            </div>
            <div class="center-button">
                <input type="submit" name="submit" value="Simpan">
            </div>
        </div>
    </form>    
</body>
</html>