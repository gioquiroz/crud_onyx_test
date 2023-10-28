<?php 
//FUNCION PARA CONECTAR PHP CON MYSQL
function conectioBD(){
    $host = "localhost";
    $user = "root";
    $pswd = "";
    $bd = "books_crud_php";
    //SENTENCIA QUE RECIBE LOS PARAMETROS PARA LA CONEXION BD 
    $connect = mysqli_connect($host, $user, $pswd);
    mysqli_select_db($connect, $bd);
    return $connect;
}
?>