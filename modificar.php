<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
//$stmt = $pdo->prepare("UPDATE tbl_persona SET name_persona=?, age_persona=? WHERE id_persona=?");
// Bind
$nombre = $_POST["name"];
$age = $_POST["age"];
$id=$_POST["id"];
/*
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $age);
$stmt->bindParam(3,$id);
// Excecute
$stmt->execute();*/
$persona=new Persona($id,$nombre,$age);
$stmt = $pdo->prepare("UPDATE tbl_persona SET name_persona=:name_persona, age_persona=:age_persona WHERE id_persona=:id_persona" );
if($stmt->execute((array) $persona)){
    echo 'bien';
    header("location:vista.php");
}else{ echo 'mal';}