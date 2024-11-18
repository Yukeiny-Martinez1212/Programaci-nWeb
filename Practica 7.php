<html>
<head> <title> PRACTICA 7 </title></head>
<body>
<?php 
require ("CONFIG.php");
echo "<h1>Práctica: Creacion de una base de datos </h1> <br> <br>";
$conexion=mysqli_connect ($servidor, $usuario, $password, $bd);
$basededatos="progweb";
$consulta="create database $basededatos";
if ($resultado=mysqli_query($conexion, $consulta))
{
echo "La base de datos $basededatos, se creó con éxito <br>";
echo "El script utilizado fue: $consulta <br> <br>";
}
else 
{
echo
"La base de datos $basededatos no se ha podido crear <br>";
}
echo "<br><br>";
mysqli_close ($conexion);
?>
</body>
</html>