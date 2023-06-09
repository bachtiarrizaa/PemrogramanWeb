<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bayar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
        <div class="box-dalam">
            <div class="box-judul">
                <h3>Pilih Metode Pembayaran</h3>
            </div>
            <div class="box-satu">
                <div class="voucher-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                    <input type="text" placeholder="Voucher fisik">
                </div>
            <div class="box-dua">
                <i class="fas fa-store"></i>
                <span>Indomart / Alfamart</span>
                <button class="more-options-btn"><i class="fas fa-chevron-circle-right"></i></button>
            </div>
            <div class="box-tiga">
                <i class="fas fa-money-bill"></i>
                <span>Aplikasi Dana</span>
                <button class="more-options-btn"><i class="fas fa-chevron-circle-right"></i></button>
            </div>
        </div>
    </div>  
</body>
</html>