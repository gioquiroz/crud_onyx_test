<?php 
include('conection.php');
$funConec = conectioBD();
$id = $_GET['id'];
$querSQL = "SELECT * FROM books WHERE id='$id'";
$query = mysqli_query($funConec, $querSQL);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Editando...</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="w-100 mt-5 mb-5">
                    <h1 class="text-center mt-5 mb-5">Editemos un libro</h1>
                    <form class="d-flex align-items-center justify-content-center flex-column" action="edit_books.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id']?>">
                        <input class="my-2 w-50 py-1 px-2" type="text" name="bookName" placeholder="Nombre" value="<?= $row['bookName']?>">
                        <input class="my-2 w-50 py-1 px-2" type="text" name="author" placeholder="Autor" value="<?= $row['author']?>">
                        <input class="my-2 w-50 py-1 px-2" type="text" name="literaryGenre" placeholder="Genero" value="<?= $row['literaryGenre']?>">
                        <input class="my-2 w-50 py-1 px-2" type="text" name="language" placeholder="Lenguaje" value="<?= $row['language']?>">
                        <input class="btn btn-success mt-3 py-1 px-3" type="submit" value="Actualizar libro" placeholder="Editar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>