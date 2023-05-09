<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h3 {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(even){background-color: #f2f2f2}
</style>

</head>
<body>
    
</body>
</html>

<?php
require_once("CDMusic.php");
require_once('CDCabinet.php');


$music = new CDMusic('aku',10000,10,'budi','romace');
$cabinet = new CDCabinet('Rak 1',200000,10,15,'kotak');


?>
<table border="1" >
    <h3>CD MUSIC</h4>
    <tr>
        <td>Name</td>
        <td>Price</td>
        <td>Discount</td>
        <td>Artist</td>
        <td>Genre</td>
    </tr>
    <tr>
        <td><?= $music->getName();?></td>
        <td><?= $music->getPrice();?></td>
        <td><?= $music->getDiscount();?></td>
        <td><?= $music->getArtist();?></td>
        <td><?= $music->getGenre();?></td>
    </tr>
</table>

<table border="1" >
    <h3>CD CABINET</h4>
    <tr>
        <td>Name</td>
        <td>Price</td>
        <td>Discount</td>
        <td>Capacity</td>
        <td>Model</td>
    </tr>
    <tr>
        <td><?= $cabinet->getName();?></td>
        <td><?= $cabinet->getPrice();?></td>
        <td><?= $cabinet->getDiscount();?></td>
        <td><?= $cabinet->getCapacity();?></td>
        <td><?= $cabinet->getModel();?></td>
    </tr>
</table>