<?php
$id = $_POST["idClin"];
$servidor = "localhost";
$basededatos = "empleado";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se pudoconectar a local host");
$consulta = "select * from perros where nombre='$id'";

$registros = mysqli_query($con, $consulta) or die("problemas con el select");
$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);
?>