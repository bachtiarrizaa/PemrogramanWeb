<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Database</title>
</head>
<body>
    <h1>Menampilkan Data Customers dan Data Produk</h1>
    <h3>Data Customer</h3>
    <table border="1">
        <tr>
            <th>customerNumber</th>
            <th>customerName</th>
            <th>contactLastName</th>
            <th>contactFirstName</th>
            <th>phone</th> 
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>city</th> 
            <th>state</th> 
            <th>postalCode</th> 
            <th>country</th> 
            <th>salesRepEmployeeNumber</th> 
            <th>creditLimit</th> 
        </tr>
        <?php
            include"koneksi.php";

            $data = mysqli_query($koneksi,"SELECT*FROM customers");
            while($hasil = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $hasil['customerNumber'];?></td>
                    <td><?php echo $hasil['customerName'];?></td>
                    <td><?php echo $hasil['contactLastName'];?></td>
                    <td><?php echo $hasil['contactFirstName'];?></td>
                    <td><?php echo $hasil['phone'];?></td>
                    <td><?php echo $hasil['addressLine1'];?></td>
                    <td><?php echo $hasil['addressLine2'];?></td>
                    <td><?php echo $hasil['city'];?></td>
                    <td><?php echo $hasil['state'];?></td>
                    <td><?php echo $hasil['postalCode'];?></td>
                    <td><?php echo $hasil['country'];?></td>
                    <td><?php echo $hasil['salesRepEmployeeNumber'];?></td>
                    <td><?php echo $hasil['creditLimit'];?></td>
                </tr>
                <?php 
            }
                
        ?>
    </table>
    <h3>Data Products</h3>
    <table border="1">
        <tr>
            <th>productCode</th>
            <th>productName</th>
            <th>productLine</th>
            <th>productScale</th>
            <th>productVendor</th> 
            <th>productDescription</th>
            <th>quantityInStock</th>
            <th>buyPrice</th> 
            <th>MSRP</th> 
        </tr>
        <?php
            include"koneksi.php";

            $data = mysqli_query($koneksi,"SELECT*FROM products");
            while($hasil = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $hasil['productCode'];?></td>
                    <td><?php echo $hasil['productName'];?></td>
                    <td><?php echo $hasil['productLine'];?></td>
                    <td><?php echo $hasil['productScale'];?></td>
                    <td><?php echo $hasil['productVendor'];?></td>
                    <td><?php echo $hasil['productDescription'];?></td>
                    <td><?php echo $hasil['quantityInStock'];?></td>
                    <td><?php echo $hasil['buyPrice'];?></td>
                    <td><?php echo $hasil['MSRP'];?></td>
                </tr>
                <?php 
            }
                
        ?>
    </table>
</body>
</html>
