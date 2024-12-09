<!DOCTYPE html>
<html lang="es">
<head>
    <title> Practica 10 </title>
</head>
<body>

<?php

require ("config.php");
echo "<h1> Practica: Lista bases de datos</h1><br><br>";
$conexion =mysqli_connect($servidor, $usuario, $password, $bd);

$consulta="show databases";
$resultado=mysqli_query($conexion, $consulta);

echo "<table border=1>";
echo "<td align=center>Listado de las bds</td>";
while ($row=mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo "<td>$row[0]</td>";
    echo "</tr>";
}
echo "</table>";

echo "<br><br>";
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

</body>
</html>
