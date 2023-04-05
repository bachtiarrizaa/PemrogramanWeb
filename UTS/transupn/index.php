<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trans UPN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container-fluid py-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
                <h1 class="mb-4">Trans UPN</h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="dropdown">
                            <button class="btn btn-dark btn-lg w-100 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-box-seam"></i>
                                Data
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="bus.php">Data Bus</a></li>
                                <li><a class="dropdown-item" href="driver.php">Data Driver</a></li>
                                <li><a class="dropdown-item" href="kondektur.php">Data Kondektur</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="dropdown">
                            <button class="btn btn-dark btn-lg w-100 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-box-seam"></i>
                                Pendapatan
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="pendapatan-driver.php">Driver</a></li>
                                <li><a class="dropdown-item" href="pendapatan-kondektur.php">Kondektur</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <a href="transupn.php" class="btn btn-dark btn-lg w-100">
                            <i class="bi bi-box-seam"></i>
                            Trans UPN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
