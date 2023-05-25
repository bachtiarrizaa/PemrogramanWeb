<?php
if (isset($_POST["submit"])) {
    $kodebuku = $_POST["kode_buku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahunterbit = $_POST["tahun_terbit"];
    $penerbit = $_POST["penerbit"];
    $jumhalaman = $_POST["jum_halaman"];
    $kategori = $_POST["kategori"];
    $sampul = "sampul/" . basename($_FILES["sampul"]["name"]);

    move_uploaded_file($_FILES["sampul"]["tmp_name"], $sampul);

    $data = "$kodebuku|$judul|$pengarang|$tahunterbit|$penerbit|$jumhalaman|$kategori|$sampul";
    file_put_contents("buku.txt", $data . PHP_EOL, FILE_APPEND);

    header("Location: index.php");
    exit();
}

if (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET["kode"])) {
    $kodebuku = $_GET["kode"];

    $file = file("buku.txt", FILE_SKIP_EMPTY_LINES);
    $output = [];

    foreach ($file as $line) {
        $data = explode("|", $line);
        if ($data[0] != $kodebuku) {
            $output[] = $line;
        }
    }
    file_put_contents("buku.txt", implode(PHP_EOL, $output));

    header("Location: index.php");
    exit();
}