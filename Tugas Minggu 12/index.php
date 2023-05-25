<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
    }
    table {
        background-color: white;
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ccc;
    }
    
    th {
        background-color: #f0f0f0;
        font-weight: bold;
    }
    
    a {
        text-decoration: none;
        color: #333;
    }
    
    a:hover {
        text-decoration: underline;
    }

    .right-align {
        text-align: right;
    }
    
    .flex-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .flex-container h2 {
        margin: 0;
    }
    
    .flex-container .btn-tambah {
        text-decoration: none;
        padding: 8px 12px;
        background-color: #ccc;
        color: black;
        border-radius: 4px;
    }
    
    .float-right {
        float: right;
    }
    
</style>
<body>
    <div class="flex-container">
        <h2>Daftar Buku Perpustakaan</h2>
        <a class="btn-tambah" href="tambah.php">Tambah Buku</a>
    </div>
    <table border="1">
        <tr>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Jumlah Halaman</th>
            <th>Kategori</th>
            <th>Sampul</th>
            <th>Aksi</th>
        </tr>

        <?php
        
         // Membaca data buku dari file teks
        $file = file("buku.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 
        foreach ($file as $line) {
            $data = explode("|", $line);
            $kodebuku = $data[0];
            $judul = $data[1];
            $pengarang = $data[2];
            $tahunterbit = $data[3];
            $penerbit = $data[4];
            $jumhalaman = $data[5];
            $kategori = $data[6];
            $sampul = $data[7];
 
            echo "<tr>";
            echo "<td>$kodebuku</td>";
            echo "<td>$judul</td>";
            echo "<td>$pengarang</td>";
            echo "<td>$tahunterbit</td>";
            echo "<td>$penerbit</td>";
            echo "<td>$jumhalaman</td>";
            echo "<td>$kategori</td>";
            echo "<td><img src='$sampul' alt='sampul' width='100'></td>";
            echo "<td><a href='edit.php?kode=$kodebuku'>Edit</a> | <a href='aksi.php?kode=$kodebuku&action=delete'>Hapus</a></td>";
            echo "</tr>";
            }
            ?>
    </table>            
</body>
</html>