<?php
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';
session_start();

if (isset($_SESSION['tarticulos'])) {
    $coleccion = $_SESSION['tarticulos'];
} else {
    $coleccion = new Tarticulos();
    $coleccion->addArticulos();
    $_SESSION['tarticulos'] = $coleccion;
}

$articulos = $coleccion->getTarticulos();
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

require __DIR__ . '/views/index.view.php';