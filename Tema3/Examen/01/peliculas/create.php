<?php
require_once 'libs/functions.php';

$peliculas = get_peliculas();


$generos = array_map('trim', explode(',', $_POST['generos']));

$peliculas[] = [
    'id'        => obtener_id_nueva_pelicula($peliculas),
    'titulo'    => $_POST['titulo'],
    'idioma'    => $_POST['idioma'],
    'director'  => $_POST['director'],
    'generos'   => $generos,
    'año'       => (int)$_POST['anio'],
    'duracion'  => (int)$_POST['duracion'],
    'recaudado' => (float)$_POST['recaudado'],
];

require 'views/index.view.php';
