<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];
    

    $query = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: products.php?msg=New record created successfully");
        exit();
    }
}
$query = "SELECT * FROM productlines";
$productLines = mysqli_query($conn,$query);

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
        /* CSS untuk menyesuaikan tampilan */
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
    <title>Tambah Product</title>
    
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
        <div class="text-center mb-3 justify-content-center">
            <h3>Add New Products</h3>
            <p class="text-muted">Compelete the form below add new products</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="productCode" placeholder="Product Code">
                    </div>
                    <div class="col">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="productName" placeholder="Product Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Product Line</label>
                        <select class="form-control" id="productLine" name="productLine">
                            <?php while ($data = mysqli_fetch_array($productLines)) : ?>
                                <option value="<?php echo $data['productLine']; ?>"><?php echo $data['productLine']; ?>
                            </option>
                            <?php endwhile; ?>
                        </select>   
                    </div>
                    <div class="col">
                        <label class="form-label">Product Scale</label>
                        <input type="text" class="form-control" name="productScale" placeholder="Product Scale">
                    </div>
                    <div class="col">
                        <label class="form-label">Product Vendor</label>
                        <input type="text" class="form-control" name="productVendor" placeholder="Product Vendor">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Description</label>
                    <input type="text" class="form-control" name="productDescription" placeholder="Product Description">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Quantity In Stock</label>
                        <input type="text" class="form-control" name="quantityInStock" placeholder="Quantity In Stock">
                    </div>
                    <div class="col">
                        <label class="form-label">Buy Price</label>
                        <input type="text" class="form-control" name="buyPrice" placeholder="Buy Price">
                    </div>
                    <div class="col">
                        <label class="form-label">MSRP</label>
                        <input type="text" class="form-control" name="MSRP" placeholder="MSRP">
                    </div>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                    <a href="products.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>