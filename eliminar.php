<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';
//echo $pdo->exec("DELETE FROM tbl_prueba WHERE id_prueba=1");
$stmt = $pdo->prepare("DELETE FROM tbl_persona WHERE id_persona=?");
// Bind
$id = $_GET["id"];

$stmt->bindParam(1, $id);
try{
    $stmt->execute();
    header("location:vista.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}