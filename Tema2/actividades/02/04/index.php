<?php


$valor1 = "";
$valor2 = 0;
$valor3 = false;


var_dump(empty($valor1)); // true
var_dump(empty($valor2)); // true
var_dump(empty($valor3)); // true




$valor4 = "Hola";
$valor5 = 10;
$valor6 = true;


var_dump(empty($valor4)); // false
var_dump(empty($valor5)); // false
var_dump(empty($valor6)); // false


?>