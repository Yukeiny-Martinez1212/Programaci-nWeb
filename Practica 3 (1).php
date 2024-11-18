<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Carlos Daniel Zetina Navarrete">
    <title>Practica 3</title>
</head>
<body>
<h1>Practica 3 Operadores</h1>

<?php

$n1=8;
$n2=2;
echo "Las variables utilizadas son: n1=$n1 y n2=$n2 <br><br>";

//Operadores aritmeticos
echo "<b>Operadores Aritmeticos</b> <br><br>";

$suma=$n1+$n2;
echo "Suma n1 + n2 = $suma <br>" ;

$resta=$n1-$n2;
echo "Resta $n1 - $n2 = $resta <br>" ;

$multiplicacion=$n1*$n2;
echo "Multiplicacion $n1 * $n2 = $multiplicacion <br>" ;

$division=$n1/$n2;
echo "Division $n1 / $n2 = $division <br>" ;

$modulo=$n1%$n2;
echo "Modulo (%) de $n1 y $n2 = $modulo <br>" ;

$preincremento=++$n1;
echo "Preincremento (++x) de $n1 = $preincremento <br>" ;

$postincremento=$n1++;
echo "Preincremento (x++) de $n1 = $postincremento <br>" ;

$predecremento=--$n2;
echo "Predecremento (--y) de $n2 = $predecremento <br>" ;

$postdecremento=$n2--;
echo "Postdecremento (y--) de $n2 = $postdecremento <br><br>" ;


//Operadores de comprobacion
echo "<b>Operadores de comprobación</b> <br><br>";
$igual=($n1 == $n2);
echo 'Igual (==): ' . ($igual ? 'Verdadero' : 'Falso') . '<br>';

$identico=($n1 === $n2);
echo 'Identico (===): ' . ($identico ? 'Verdadero' : 'Falso') . '<br>';

$distinto=($n1 <> $n2);
echo 'Distinto (<>): ' . ($distinto ? 'Verdadero' : 'Falso') . '<br>';

$distinto=($n1 != $n2);
echo 'Distinto (!=): ' . ($distinto ? 'Verdadero' : 'Falso') . '<br>';

$noidentico=($n1 !== $n2);
echo 'No identico (!==): ' . ($noidentico ? 'Verdadero' : 'Falso') . '<br>';

$mayorque=($n1 > $n2);
echo 'Mayor que (>): ' . ($mayorque ? 'Verdadero' : 'Falso') . '<br>';

$menorque=($n1 < $n2);
echo 'Menor que (<): ' . ($menorque ? 'Verdadero' : 'Falso') . '<br>';

$mayoroigual=($n1 >= $n2);
echo 'Mayor o igual (>=): ' . ($mayoroigual ? 'Verdadero' : 'Falso') . '<br>';

$menoroigual=($n1 <= $n2);
echo 'Menor o igual (<=): ' . ($menoroigual ? 'Verdadero' : 'Falso') . '<br><br>';


//Operadores de asignacion

echo "<b>Operadores de asignación numerica</b> <br><br>";

echo "El numero que ocuparemos va ser: 10<br><br>";

$c = 10;
$c += 5;  
echo "Suma asignación (+=5): $c <br>";
$c -= 3;  
echo "Resta asignación (-=3): $c <br>";
$c *= 2;  
echo "Multiplicación asignación (*=2): $c <br>";
$c /= 5;  
echo "División asignación (/=5): $c <br>";
$c %= 3;  
echo "Modulo asignación (%=3): $c <br><br>";


//Operadores logicos

echo "<b>Operadores de asignación</b> <br><br>";




// Operador AND (&&)
$tiene_licencia=true;
if ($n1 >= 18 && $tiene_licencia == true) {
    echo "Puede conducir";
}else {
    echo "Al menos una condición es falsa (AND)<br>";
}

// Operador OR (||)
echo "OR ($n1 > $c || $n2 < $c)";
if ($n1 > $c || $n2 < $c) {
    echo "1 ó 2 son correctas (OR)<br>";
} else {
    echo "Ninguna es correcta (OR)<br>";
}

// Operador NOT (!)
if (!($n1 == $n2)) {
    echo "La condición es verdadera (NOT)<br><br>";
} else {
    echo "La condición es falsa (NOT)<br><br>";
}

//Operadores de cadena

echo "<b>Operadores de asignación</b> <br><br>";

$String1 = "Buenas";
$String2 = " Tardes";
echo "Estos van a ser las cadenas a concatenar: $String2 y $String2 <br><br>";

$concatenacion = $String1 . $String2;   // Concatenación
echo "Concatenación (.): $concatenacion <br>";

$String1 .= $String2; // Asignar Concatenación
echo "Asignar concatenación (.=): $String1\n";

?>
</body>
</html>