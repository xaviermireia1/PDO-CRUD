<?php
    require_once 'cabecera.html';
    include 'config.php';
    include 'conexion.php';
    include 'persona.php';
    $id=$_GET["id"];
    $sentencia=$pdo->prepare("SELECT * FROM tbl_persona WHERE id_persona=$id");
    $sentencia->execute();
    $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
<center><h1>Actualizar persona</h1></center>
<div class="form-group align-items-center">
    <form action="modificar.php" method="post">
    <?php
        foreach ($listaPersonas as $persona) {
            echo "<p>Name: <input type='text' name='name' id='name' class='form-control' value='{$persona['name_persona']}'></p>";
            echo "<p>Age: <input type='age' name='age' id='age' class='form-control' value='{$persona['age_persona']}'></p>";
            echo "<input type='hidden' name='id' id='id' value='{$id}'>";
        }
        ?>
        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
</div>
</body>
</html>