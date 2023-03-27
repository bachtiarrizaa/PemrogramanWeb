<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $customerNumber = $_POST['customerNumber'];
    $customerName = $_POST['customerName'];
    $contactLastName = $_POST['contactLastName'];
    $contactFirstName = $_POST['contactFirstName'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
    $creditLimit = $_POST['creditLimit'];

    $query = "INSERT INTO customers (customerNumber, customerName, contactLastName, ,contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES 
    ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city','$state' ,'$postalCode', '$country', '$salesRepEmployeeNumber', '$creditLimit')";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }
}
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
        .fa-pen-to-square, .fa-trash {
            cursor: pointer;
        }
        .fa-pen-to-square:hover, .fa-trash:hover {
            color: #dc3545;
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
        <div class="text-center mb-3 justify-content-center">
            <h3>Add New Product</h3>
            <p class="text-muted">Compelete the form below add new customers</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">
            <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Customer Number</label>
                        <input type="text" class="form-control" name="customerNumber" placeholder="Customer Number">
                    </div>
                    <div class="col">
                        <label class="form-label">Customer Name</label>
                        <input type="text" class="form-control" name="customerName" placeholder="Customer Name">
                    </div>
                    <div class="col">
                        <label class="form-label">Contact First Name</label>
                        <input type="text" class="form-control" name="contactFirstName" placeholder="Contact First Name">
                    </div>
                    <div class="col">
                        <label class="form-label">Contact Last Name</label>
                        <input type="text" class="form-control" name="contactLastName" placeholder="Contact Last Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>
                    <div class="col">
                        <label class="form-label">Addres LIne 1</label>
                        <input type="text" class="form-control" name="addressLine1" placeholder="Addres LIne 1">
                    </div>
                    <div class="col">
                        <label class="form-label">Addres LIne 2</label>
                        <input type="text" class="form-control" name="addressLine2" placeholder="Addres LIne 2">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="col">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" name="state" placeholder="State">
                    </div>
                    <div class="col">
                        <label class="form-label">Postal Code</label>
                        <input type="text" class="form-control" name="postalCode" placeholder="Postal Code">
                    </div>
                    <div class="col">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Country">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sales Rep Employee Number</label>
                    <input type="text" class="form-control" name="salesRepEmployeeNumber" placeholder="Sales Rep Employee Number">
                </div>
                <div class="mb-3">
                    <label class="form-label">Credit Limit</label>
                    <input type="text" class="form-control" name="creditLimit" placeholder="Credit Limit">
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                    <a href="customers.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>