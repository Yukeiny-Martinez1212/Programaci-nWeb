<!DOCTYPE html>
<html lang="es">
<head>
    <title> Practica 8 </title>
    <meta charset="UTF-8">
    <meta name="author" content="Patricia Yukeiny M.">
</head>

<body>
<?php

require ("config.php");
echo "<h1>Practica: Eliminacion de una base de datos</h1><br><br>";
$conexion=mysqli_connect ($servidor, $usuario, $password, $bd);
$basededatos="programacion_web";

$consulta="drop database $basededatos";
if ($resultado=mysqli_query ($conexion, $consulta))
{
    echo "La base de datos $basededatos, se elimino con exito <br>";
    echo "El script utilizado fue: $consulta <br><br>";
}
else
{
echo "La base de datos $basededatos no se ha podido eliminar <br>".mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion);
?>

</body>
</html>