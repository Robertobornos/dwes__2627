<?php
require_once __DIR__ . '/class/Articulos.php';
require_once __DIR__ . '/class/Tarticulos.php';


$peliculas = get_peliculas();
$id = (int)($_GET['id'] ?? 0);

$pelicula = null;
foreach ($peliculas as $p) {
    if ($p['id'] === $id) {
        $pelicula = $p;
    }
}


if ($pelicula === null) {
    require 'views/index.view.php';
    exit;
}


$pelicula['generos'] = implode(', ', $pelicula['generos']);

require '/views/edit.view.php';