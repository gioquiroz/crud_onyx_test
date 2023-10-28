<?php
include('conection.php');
$funConec = conectioBD();
$querSQL = "SELECT * FROM books";
$query = mysqli_query($funConec, $querSQL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Librería Onyx</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="w-100 mt-5 mb-5">
                    <h1 class="text-center mt-5 mb-5">Librería Onyx</h1>
                    <form class="d-flex align-items-center justify-content-center flex-column" action="insert_books.php" method="POST">
                        <input class="my-2 w-25 rounded-3 py-1 px-2" type="text" name="bookName" placeholder="Nombre">
                        <input class="my-2 w-25 rounded-3 py-1 px-2" type="text" name="author" placeholder="Autor">
                        <input class="my-2 w-25 rounded-3 py-1 px-2" type="text" name="literaryGenre" placeholder="Genero">
                        <input class="my-2 w-25 rounded-3 py-1 px-2" type="text" name="language" placeholder="Lenguaje">
                        <input class="btn btn-success mt-3 py-1 px-3" type="submit" value="Agregar libro" placeholder="Agregar">
                    </form>
                </div>
            </div>
            <div class="col-4 offset-8">
                <form action="search_books.php" method="POST">
                    <input class="my-2 w-75 rounded-3 py-1 px-2" type="search" name="search" placeholder="Buscar libro">
                    <input class="btn btn-warning py-1 px-2" type="submit" value="Buscar" placeholder="Buscar">
                </form>
            </div>
            <div class="col-12">
                <div>
                    <h2 class="text-center my-3">Registro de libros</h2>
                    <table class="w-100 mb-5">
                        <thead>
                            <tr>
                                <th class="px-3 py-2 text-center">ID</th>
                                <th class="px-3 py-2 text-center">Nombre del libro</th>
                                <th class="px-3 py-2 text-center">Autor</th>
                                <th class="px-3 py-2 text-center">Genero Literario</th>
                                <th class="px-3 py-2 text-center">Idioma</th>
                                <th class="px-3 py-2 text-center"></th>
                                <th class="px-3 py-2 text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($query)): ?>
                            <tr>
                                <th class="text-center px-3 py-1"><?= $row['id']?></th>
                                <th class="px-3 py-1"><?= $row['bookName']?></th>
                                <th class="px-3 py-1"><?= $row['author']?></th>
                                <th class="px-3 py-1"><?= $row['literaryGenre']?></th>
                                <th class="px-3 py-1"><?= $row['language']?></th>
                                <th class="px-3 py-1"><a class="main-btn-crud edit" href="update_books.php?id=<?= $row['id']?>">Editar</a></th>
                                <th class="px-3 py-1"><a class="main-btn-crud delete" href="delete_books.php?id=<?= $row['id']?>">Eliminar</a></th>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    
</script>
</html>