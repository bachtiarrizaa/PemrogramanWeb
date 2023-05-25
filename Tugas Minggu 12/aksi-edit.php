<?php
if (isset($_POST["submit"])) {
    $kodebuku = $_POST["kode_buku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahunterbit = $_POST["tahun_terbit"];
    $penerbit = $_POST["penerbit"];
    $jumhalaman = $_POST["jum_halaman"];
    $kategori = $_POST["kategori"];
    $sampul = $_FILES["sampul"]["name"]; 

    $file = file("buku.txt", FILE_SKIP_EMPTY_LINES);
    $perbaruiData = [];


    foreach ($file as $line) {
        $data = explode("|", $line);
        if ($data[0] == $kodebuku) {
            $updateLine = $kodebuku . "|" . $judul . "|" . $pengarang . "|" . $tahunterbit . "|" . $penerbit . "|" . $jumhalaman . "|" . $kategori . "|" . $sampul;
            $perbaruiData[] = $updateLine;
        } else {
            $perbaruiData[] = $line;
        }
    }

    $file_perpus = fopen("buku.txt", "w");
    if ($file_perpus) {
        foreach ($perbaruiData as $line) {
            fwrite($file_perpus, $line . "\n");
        }
        fclose($file_perpus); 
        header("Location: index.php"); 
        exit; 
    } else {
        echo "Gagal membuka file buku.txt.";
        exit;
    }
}
?>