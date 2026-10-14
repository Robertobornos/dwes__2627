<?php



// Datos de entrada
$v0 = (float) ($_POST['velocidad_inicial'] ?? 0);
$a  = (float) ($_POST['aceleracion'] ?? 0);
$t  = (float) ($_POST['tiempo'] ?? 0);
$m  = (float) ($_POST['masa'] ?? 0);

// Cálculos
$velocidad_final        = $v0 + $a * $t;
$espacio_recorrido      = $v0 * $t + 0.5 * $a * pow($t, 2);
$fuerza_neta            = $m * $a;
$energia_cinetica_final = 0.5 * $m * pow($velocidad_final, 2);

// Formateo de los resultados para mostrar dos decimales y usar coma como separador decimal
$v0_formato             = number_format($v0, 2, ',', '.');
$a_formato              = number_format($a, 2, ',', '.');
$t_formato              = number_format($t, 2, ',', '.');
$m_formato              = number_format($m, 2, ',', '.');
$velocidad_final        = number_format($velocidad_final, 2, ',', '.');
$espacio_recorrido      = number_format($espacio_recorrido, 2, ',', '.');
$fuerza_neta            = number_format($fuerza_neta, 2, ',', '.');
$energia_cinetica_final = number_format($energia_cinetica_final, 2, ',', '.');

include "views/view.resultados.php";
