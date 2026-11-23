<?php

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del libro a editar desde la URL
// edit.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$articulos = get_articulos();

// Obtenemos el libro a editar
$articulo = $articulos[$indice];  

var_dump($articulo);
// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/edit.view.php';



