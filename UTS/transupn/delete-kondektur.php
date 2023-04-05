<?php
include 'conn.php';
$id_kondektur = $_GET['id_kondektur'];
$query = "DELETE FROM kondektur WHERE id_kondektur = $id_kondektur";
$result = mysqli_query($conn, $query);
if($result){
    header("Location: kondektur.php?msg=Record deleted succesfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>