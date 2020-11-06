<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');
$id= $_GET['id'];

$sql = "delete from permisos where id=$id";
$result =  $conn->query($sql);	
if (!$result) die('Error al eliminar');
header('Location: permisos.php');
?>