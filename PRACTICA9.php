<!DOCTYPE html>
<html lang="es">
<head>
    <title> Practica 9 </title>
    <meta charset="UTF-8">
    <meta name="author" content="Yukeiny M">
</head>
<body>

<?php
require ("config.php");
echo "<h1>Creacion de una tabla con variables</h1><br><br>";
$conexion=mysqli_connect ($servidor, $usuario, $password, $bd);
$tabla="tabla_nueva";
$campo1="id";
$campotipo1="int";
$long1="4";
$campo2="nombre";
$campotipo2="varchar";
$long2="50";

$consulta="create table $tabla ($campo1 $campotipo1($long1), $campo2 $campotipo2($long2))";
if ($resultado=mysqli_query ($conexion, $consulta))
{
    echo "La tabla $tabla, se creo con exito <br>";
    echo "El script utilizado fue $consulta <br><br>";
}
else
{
    echo "La tabla $tabla no se ha podido crear <br>".mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion)
?>
</body>
</html>
