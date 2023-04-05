<?php
include 'conn.php';
$id_bus = $_GET['id_bus'];
$query = "DELETE FROM bus WHERE id_bus = $id_bus";
$result = mysqli_query($conn, $query);
if($result){
    header("Location: bus.php?msg=Record deleted succesfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>