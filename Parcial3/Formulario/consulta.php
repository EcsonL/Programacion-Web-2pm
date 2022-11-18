<?php
$servidor = "localhost";
$basededatos = "empleado";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se pudoconectar a local host");
$consulta = "select * from empleado";

$registros = mysqli_query($con, $consulta) or die("problemas con el select");

//while ($reg = mysqli_fetch_array($registros, MYSQLI_ASSOC))
//{
    //printf($reg['nombre'].''.$reg['apPaterno']);
    //id = $reg['nombre'];
    //nombre = $reg['apPaterno'];
    //$registro["id"] = $reg['nombre'];
    //$registro["Nombre"] = $reg['apPaterno'];

    //echo json_encode($registro);
//}
$reg = mysqli_fetch_array($registros, MYSQLI_ASSOC)
    $registro["id"] = $reg['nombre'];
    $registro["Nombre"] = $reg['apPaterno']

    echo json_encode($registro);

?>