<?php
include 'conn.php';
$id_driver = $_GET['id_driver'];
$query = "DELETE FROM driver WHERE id_driver = $id_driver";
$result = mysqli_query($conn, $query);
if($result){
    header("Location: driver.php?msg=Record deleted succesfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>