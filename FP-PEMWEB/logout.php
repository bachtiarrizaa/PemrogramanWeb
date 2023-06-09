<!-- logout.php -->
<?php
session_start();
// Menghapus data sesi pengguna
session_unset();
session_destroy();
// Redirect ke halaman login
header("Location: login.php");
exit();
?>
