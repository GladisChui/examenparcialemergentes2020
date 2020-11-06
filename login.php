<?php 
session_start();
require_once('librerias/conexionBD.php');

$usuario = $_POST['usuario'];
$clave = md5($_POST['clave']);

$sql =  "select * from usuarios where usuario = '$usuario' and clave ='$clave' limit 1";

$result = $conn->query($sql);
if (!$result) die('Error al seleccionar');

if ($result->num_rows > 0){
    $fila = $result->fetch_array();
    $_SESSION["login"] = "OK";
    $_SESSION["usuario"] = $usuario;
    header('Location: inicio.php');
}
else{
    header('Location: index.php');
}
?>