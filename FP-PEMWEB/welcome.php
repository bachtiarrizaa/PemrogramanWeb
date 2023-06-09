<!-- welcome.php -->
<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika belum login
    header("Location: login.php");
    exit();
}

// Menampilkan pesan selamat datang
echo "Selamat datang, " . $_SESSION['username'] . "!";

// Tambahkan opsi untuk logout
echo "<br><br><a href='logout.php'>Logout</a>";
?>
