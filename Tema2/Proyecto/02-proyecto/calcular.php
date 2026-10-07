<?php

// Constante de la Gravedad Universal (m/s²)
const GRAVEDAD = 9.8;

// Datos del formulario
$velocidad_inicial  = (float) ($_POST['velocidad_inicial'] ?? 0);
$angulo_lanzamiento = (float) ($_POST['angulo_lanzamiento'] ?? 0);

// Ángulo en radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Componentes de la velocidad inicial
$velocidad_inicial_x = $velocidad_inicial * cos($angulo_radianes);
$velocidad_inicial_y = $velocidad_inicial * sin($angulo_radianes);

// Tiempo de vuelo: t = 2·v0y / g
$tiempo_vuelo = 2 * $velocidad_inicial_y / GRAVEDAD;

// Alcance máximo: x = v0x · t
$alcance_maximo = $velocidad_inicial_x * $tiempo_vuelo;


$altura_maxima = ($velocidad_inicial_y ** 2) / (2 * GRAVEDAD);

// Vista
include "views/calculo.view.php";