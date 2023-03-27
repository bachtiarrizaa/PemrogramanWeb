<?php
$host = "localhost"; //alamat server database
$username = "root"; //username untuk mengakses database
$password = ""; //password untuk mengakses database
$database = "classicmodels"; //nama database yang akan digunakan

//buat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

//cek koneksi
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>