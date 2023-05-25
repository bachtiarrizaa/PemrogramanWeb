<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Buku</title>
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
    <h2>Tambah Buku</h2>
    <form method="post" action="aksi.php" enctype="multipart/form-data">
        <label for="kode_buku">Kode Buku</label>
        <input type="text" id="kode_buku" name="kode_buku">
        <label for="judul">Judul Buku</label>
        <input type="text" id="judul" name="judul">
        <br><br>
        <label for="pengarang">Pengarang</label>
        <input type="text" id="pengarang" name="pengarang">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" id="tahun_terbit" name="tahun_terbit">
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit">
        <br><br>
        <label for="jum_halaman">Jumlah Halaman</label>
        <input type="text" id="jum_halaman" name="jum_halaman">
        <label for="kategori">Kategori</label>
        <input type="text" id="kategori" name="kategori" >
        <br><br>
        <label for="sampul">Sampul</label>
        <input type="file" id="sampul" name="sampul" accept="image/*">
        <br></br>
        <div class="form-actions">
            <div class="center-button">
                <a href="index.php">Kembali</a>
            </div>
            <div class="center-button">
                <input type="submit" name="submit" value="Tambah">
            </div>
        </div>

    </form>

</body>
</html>