<?php
include('conn.php');
?>
<?php 
$status = '';

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];
    
    $query = $conn->prepare("INSERT INTO products VALUES (
        :productCode,
        :productName,
        :productLine,
        :productScale,
        :productVendor,
        :productDescription,
        :quantityInStock ,
        :buyPrice ,
        :MSRP )");

    $query->bindParam(':productCode',$productCode);
    $query->bindParam(':productName',$productName);
    $query->bindParam(':productLine',$productLine);
    $query->bindParam(':productScale',$productScale);
    $query->bindParam(':productVendor',$productVendor);
    $query->bindParam(':productDescription',$productDescription);
    $query->bindParam(':quantityInStock',$quantityInStock);
    $query->bindParam(':buyPrice',$buyPrice);
    $query->bindParam(':MSRP',$MSRP);

    
    if ($query->execute()) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
    
}

$getProductLine = "SELECT * FROM productlines";
$productLines = $conn->query($getProductLine);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <style>
        
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
            color: white;
        }
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
    <title>Tambah Customers</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Database Classicmodels</a>
            <div class="d-flex">
                <a class="btn btn-outline-light me-3" href="customers.php">Customers</a>
                <a class="btn btn-outline-light" href="products.php">Products</a>
            </div>
        </div>
    </nav>
    <div class="container">
            <?php
                if ($status == 'ok') {
                    echo '<div class="alert alert-success mx-3" role="alert">
                    Berhasil Ditambahkan
                </div>';
                }else if ($status == 'err') {
                    echo '<div class="alert alert-danger mx-3" role="alert">
                    Gagal Ditambahkan
                </div>';
                }
            ?>
            <div class="text-center mb-3    justify-content-center">
                <h3>Add New Customers</h3>
                <p class="text-muted">Compelete the form below add new customers</p>
            </div>
            <div class="container d-flex justify-content-center">
                <form action="tambahProduct.php" method="post" class="mx-5">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="productCode" class="mx-2">Product Code</label>
                            <input type="text" class="form-control" id="productCode" placeholder="Product Code" name="productCode">
                        </div>
                        <div class="col">
                            <label for="productName" class="mx-2">Product Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="productLine" class="mx-2">Product Line</label>
                            <select class="form-control" id="productLine" name="productLine">
                                <?php while ($data = $productLines->fetch(PDO::FETCH_ASSOC)) : ?>
                                    <option value="<?php echo $data['productLine']; ?>"><?php echo $data['productLine']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="productScale" class="mx-2">Product Sale</label>
                            <input type="text" class="form-control" id="productScale" placeholder="Product Sale" name="productScale">
                        </div>
                        <div class="col">
                            <label for="productVendor" class="mx-2">Product Vendor</label>
                            <input type="text" class="form-control" id="productVendor" placeholder="Product Vendor" name="productVendor">
                        </div>
                    </div>
                    <div class="row mb-3">
                            <label for="productDescription" class="mx-2">Product Description</label>
                            <textarea class="form-control" id="productDescription" name="productDescription" rows="3"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="quantitiStock" class="mx-2">Quantity Stock</label>
                            <input type="number" class="form-control" id="quantitiStock" placeholder="1999" name="quantityInStock" >
                        </div>
                        <div class="col">
                            <label for="buyPrice" class="mx-2">Buy Price</label>
                            <input type="number" class="form-control" id="buyPrice" placeholder="99.99" name="buyPrice" step="any">
                        </div>
                        <div class="col">
                            <label for="msrp" class="mx-2">MSRP</label>
                            <input type="number" class="form-control" id="msrp" placeholder="110.91" name="MSRP" step="any">
                        </div>
                    </div> 
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>