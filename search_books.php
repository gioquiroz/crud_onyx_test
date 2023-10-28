<?php 
include('conection.php');
$funConec = conectioBD();
$name = $_POST['bookName'];
$author =  $_POST['author'];
$literaryGenre = $_POST['literaryGenre'];
$querSQL = "SELECT * FROM books WHERE bookName='$name'";
$query = mysqli_query($funConec, $querSQL);
$row = mysqli_fetch_array($query);
if($query){
    Header("Location: index.php");
};
?>