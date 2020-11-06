<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');

$id = $_GET['id'];

$sql = "delete from roles where id = '$id'";
$estado = $conn->query($sql);
if(!$estado){
    die("Error Al eliminar");
}
header('Location: roles.php');
?>