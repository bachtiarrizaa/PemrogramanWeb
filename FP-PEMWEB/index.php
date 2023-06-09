
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="box-kiri">
            <div class="container-kiri">
                <div class="atas">
                    <img src="img/gambar1.jpg" alt="" height="40px" width="auto">
                    <div class="judul">
                        <h5>GARENA<br>FREE <span>FIRE</span></h5>
                    </div>
                </div>
                <div class="bawah">
                    <p>
                        Hari gini masih bingung mau topup dimana? Duh gak banget deh! Gunain aja fitur top up game dari 
                        Top Fire. Cukup klik linknya, lalu pilih nominal top up dan bayar sesuai nominal. Gampang banget kan
                    </p>
                </div>
            </div>
        </div>
        <div class="box-kanan">
            <div class="sub-box sub-box-satu">
                <div class="sub-box-title-satu">
                    <h4>USERNAME</h4> 
                </div>
                <div class="sub-box-content-satu">
                    <input type="text" name="username" id="Email / No" placeholder="USERNAME">
                </div>
            </div>
            <div class="sub-box sub-box-dua">
                <div class="sub-box-title-dua">
                    <h4>PLAYER ID</h4>
                </div>
                <div class="sub-box-content-dua">
                    <input type="text" name="id" id="id" placeholder="PLAYER ID">
                </div>
            </div>
            <div class="sub-box sub-box-tiga">
                <div class="sub-box-title-tiga">
                    <h4>PILIH JUMLAH</h4>
                </div>
                <div class="sub-box-content-tiga">
                    <div class="button-container">
                        <button type="button">5 Diamond</button>
                        <button type="button">17 Diamond</button>
                        <button type="button">75 Diamond</button>
                        <button type="button">140 Diamond</button>
                        <button type="button">355 Diamond</button>
                        <button type="button">720 Diamond</button>
                        <button type="button">1,450 Diamond</button>
                        <button type="button">2,180 Diamond</button>
                        <button type="button">3,640 Diamond</button>
                    </div>
                </div>
            </div>
            <button class="sub-box sub-box-empat">
                <span>Metode Pembayaran</span>
                <i class="fas fa-chevron-circle-right"></i>
            </button>
        </div>
    </body>
</html>
