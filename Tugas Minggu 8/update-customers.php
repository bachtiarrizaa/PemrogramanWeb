<?php
include('conn.php');
?>

<?php
$status = '';
if ($_SERVER['REQUEST_METHOD']=== 'GET') {
    if (isset($_GET['customerNumber'])) {
        $customerNumber = $_GET['customerNumber'];

        $customerNumberQuery = $conn->prepare("SELECT * from customers where customerNumber = :customerNumber");
        $customerNumberQuery->bindParam(':customerNumber',$customerNumber);
        $customerNumberQuery->execute();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    $query = $conn->prepare("update customers set
        customerName = :customerName,
        contactLastName = :contactLastName,
        contactFirstName = :contactFirstName,
        phone = :phone,
        addressLine1 = :addressLine1,
        addressLine2 = :addressLine2,
        city = :city,
        state = :state,
        postalCode = :postalCode,
        country = :country,
        salesRepEmployeeNumber = :salesRepEmployeeNumber,
        creditLimit = :creditLimit
        where customerNumber = :customerNumber");
        $query->bindParam(':customerNumber',$customerNumber);
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
    header('Location: customer.php?status='.$status);
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
        <div class="text-center mb-3    justify-content-center">
                <h3>Update Customers</h3>
                <p class="text-muted">Compelete the form below update customers</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="updateCustomer.php" method="post" class="mx-5">
                <div class="row mb-3">
                    <?php while($data = $customerNumberQuery->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="col">
                        <label for="customerName" class="mx-2">Customer Name</label>
                        <input type="text" class="form-control" id="customerName" placeholder="Customer Name" name="customerName" value="<?php echo $data['customerName'];?>">
                        <input type="hidden" name="customerNumber" value="<?php echo $data['customerNumber'];?>">
                    </div>
                    <div class="col">
                        <label for="contactFirstName" class="mx-2">Contact First Name</label>
                        <input type="text" class="form-control" id="contactFirstName" placeholder="Contact First Name" name="contactFirstName" value="<?php echo $data['contactFirstName'];?>">
                    </div>
                    <div class="col">
                        <label for="contactLastName" class="mx-2">Contact Last Name</label>
                        <input type="text" class="form-control" id="contactLastName" placeholder="Contact Last Name" name="contactLastName" value="<?php echo $data['contactLastName'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="phone" class="mx-2">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Product Sale" name="phone" value="<?php echo $data['phone'];?>">
                    </div>
                    <div class="col">
                        <label for="addressLine1" class="mx-2">Address Line 1</label>
                        <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1" name="addressLine1" value="<?php echo $data['addressLine1'];?>">
                    </div>
                    <div class="col">
                        <label for="addressLine2" class="mx-2">Address Line 2</label>
                        <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2" name="addressLine2" value="<?php echo $data['addressLine2'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="city" class="mx-2">City</label>
                        <input type="text" class="form-control" id="city" placeholder="city" name="city" value="<?php echo $data['city'];?>">
                    </div>
                    <div class="col">
                        <label for="state" class="mx-2">State</label>
                        <input type="text" class="form-control" id="state" placeholder="state" name="state" value="<?php echo $data['state'];?>">
                    </div>
                    <div class="col">
                        <label for="postalCode" class="mx-2">Postal Code</label>
                        <input type="text" class="form-control" id="postalCode" placeholder="post Code" name="postalCode" value="<?php echo $data['postalCode'];?>">
                    </div>
                    <div class="col">
                        <label for="country" class="mx-2">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="country" name="country" value="<?php echo $data['country'];?>">
                    </div>
                </div>
                <div class="row mb03">
                    <div class="col">
                        <label for="salesRepEmployeeNumber" class="mx-2">Employee Number</label>
                        <select class="form-control" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber">
                            <option value="<?php echo $data['salesRepEmployeeNumber'];?>"><?php echo $data['salesRepEmployeeNumber'];?></option>
                            <?php while ($dataEmployees = $employees->fetch(PDO::FETCH_ASSOC)) : ?>
                                <option value="<?php echo $dataEmployees['employeeNumber']; ?>"><?php echo $dataEmployees['employeeNumber']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col">
                         <label for="creditLimit" class="mx-2">creditLimit</label>
                        <input type="number" class="form-control" id="creditLimit" placeholder="creditLimit" name="creditLimit" step="any" value="<?php echo $data['creditLimit'];?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                <?php endwhile;?>
            </form>
        </div>
        
    </div>
</div>