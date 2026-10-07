<?php
/* controlador: potencia.php */


$valor1 = $_POST['valor1'] ?? 0;
$valor2 = $_POST['valor2'] ?? 0;

// Realizar la operación
$resultado = $valor1 ** $valor2;


if (is_nan($resultado) || is_infinite($resultado)) {
    $resultado = "Operación no válida para estos valores";
}

$operacion = "Potencia";

// Vista
include "views/resultado.view.php";