<?php
include 'conn.php';
$id_trans_upn = $_GET['id_trans_upn'];
$query = "DELETE FROM trans_upn WHERE id_trans_upn = $id_trans_upn";
$result = mysqli_query($conn, $query);
if($result){
    header("Location: driver.php?msg=Record deleted succesfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>