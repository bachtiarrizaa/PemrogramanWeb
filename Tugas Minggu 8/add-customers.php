<?php
include('conn.php');
?>

<?php
$status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    $query = $conn->prepare("INSERT INTO customers
        SELECT MAX(customerNumber) + 1,
        :customerName,
        :contactLastName,
        :contactFirstName,
        :phone,
        :addressLine1,
        :addressLine2,
        :city,
        :state,
        :postalCode,
        :country,
        :salesRepEmployeeNumber,
        :creditLimit
        from customers");
        $query->bindParam(':customerName',$customerName);
        $query->bindParam(':contactLastName',$contactLastName);
        $query->bindParam(':contactFirstName',$contactFirstName);
        $query->bindParam(':phone',$phone);
        $query->bindParam(':addressLine1',$addressLine1);
        $query->bindParam(':addressLine2',$addressLine2);
        $query->bindParam(':city',$city);
        $query->bindParam(':state',$state);
        $query->bindParam(':postalCode',$postalCode);
        $query->bindParam(':country',$country);
        $query->bindParam(':salesRepEmployeeNumber',$salesRepEmployeeNumber);
        $query->bindParam(':creditLimit',$creditLimit);
    
    if ($query->execute()) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
}


$getemployee = "SELECT * FROM employees";
$employees = $conn->query($getemployee);
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
            } else if ($status == 'err') {
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
                <form action="" method="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                        <label for="customerName" class="mx-2">Customer Name</label>
                        <input type="text" class="form-control" id="customerName" placeholder="Customer Name" name="customerName">
                    </div>
                <div class="col">
                    <label for="contactFirstName" class="mx-2">Contact First Name</label>
                    <input type="text" class="form-control" id="contactFirstName" placeholder="Contact First Name" name="contactFirstName">
                </div>
                <div class="col">
                    <label for="contactLastName" class="mx-2">Contact Last Name</label>
                    <input type="text" class="form-control" id="contactLastName" placeholder="Contact Last Name" name="contactLastName">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="phone" class="mx-2">Phone Number</label>
                    <input type="text" class="form-control" id="phone" placeholder="Product Sale" name="phone">
                </div>
                <div class="col">
                    <label for="addressLine1" class="mx-2">Address Line 1</label>
                    <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1" name="addressLine1">
                </div>
                <div class="col">
                    <label for="addressLine2" class="mx-2">Address Line 2</label>
                    <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2" name="addressLine2">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="city" class="mx-2">City</label>
                    <input type="text" class="form-control" id="city" placeholder="city" name="city">
                </div>
                <div class="col">
                    <label for="state" class="mx-2">State</label>
                    <input type="text" class="form-control" id="state" placeholder="state" name="state">
                </div>
                <div class="mb-2 col-lg">
                    <label for="postalCode" class="mx-2">Postal Code</label>
                    <input type="text" class="form-control" id="postalCode" placeholder="post Code" name="postalCode">
                </div>
                <div class="mb-2 col-lg">
                    <label for="country" class="mx-2">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="country" nname="country" placeholder="Country">
                </div>
            </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="mb-2 col-lg-6">
                            <label for="salesRepEmployeeNumber" class="mx-2">Employee Number</label>
                            <select class="form-control" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber">
                                <?php while ($data = $employees->fetch(PDO::FETCH_ASSOC)) : ?>
                                    <option value="<?php echo $data['employeeNumber']; ?>"><?php echo $data['employeeNumber']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="creditLimit" class="mx-2">creditLimit</label>
                            <input type="number" class="form-control" id="creditLimit" placeholder="creditLimit" name="creditLimit" step="any">
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>