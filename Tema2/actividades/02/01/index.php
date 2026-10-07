<?php

$entero = 10;
$cadena = "5";
$float = 2.5;
$texto = "Hola";
$booleano = true;

echo "El resultado de multiplicar el entero y la cadena es: ";
var_dump($entero * $cadena);
echo "<br>";

echo "El resultado de sumar el float y el entero es: ";
var_dump($float + $entero);
echo "<br>";

echo "El resultado de concatenar el texto y el entero es: ";
var_dump($texto . " " . $entero);
echo "<br>";

echo "El resultado de sumar el entero y la cadena es: ";
var_dump($entero + $cadena);
echo "<br>";

echo "El resultado de sumar el entero y el booleano es: ";
var_dump($entero + $booleano);
echo "<br>";

?>
