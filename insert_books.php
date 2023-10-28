<?php 
include('conection.php');
$funConec = conectioBD();

//VARIABLES PARA AGREGAR LIBROS A LA BASE DE DATOS
$id = null;
$name = $_POST['bookName'];
$author =  $_POST['author'];
$literaryGenre = $_POST['literaryGenre'];
$language = $_POST['language'];

// SENTENCIA PARA AGREGAR LIBROS A LA BASE DATOS Y USARLA DESDE PHP, CADA VALOR DENTRO DE COMILLAS SENCILLAS
$querSQL = "INSERT INTO books VALUES('$id', '$name', '$author', '$literaryGenre', '$language')";
$query = mysqli_query($funConec, $querSQL);

//SENTENCIA PARA CUANDO SE DE CLICK EN SUBMIT DEL FORMULARIO SE RECARGUE EL ARCHIVO Y SE ACTUALICEN LOS DATOS
if($query){
    Header("Location: index.php");
};
?>