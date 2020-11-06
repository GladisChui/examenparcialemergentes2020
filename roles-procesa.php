<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

if($id == 0){
    $sql = "insert into roles (descripcion) values ('$descripcion')";
}else {
    $sql = "update roles set descripcion = '$descripcion' where id = '$id'";
}

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: roles.php');
?>