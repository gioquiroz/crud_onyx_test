<?php
include('conection.php');
$funConec = conectioBD();
$id = $_GET['id'];
$querSQL = "DELETE FROM books  WHERE id='$id'";
$query = mysqli_query($funConec, $querSQL);
if($query){
    Header("Location: index.php");
};
?>