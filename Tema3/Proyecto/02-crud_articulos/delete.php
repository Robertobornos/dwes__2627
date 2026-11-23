<?php



// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del libro a editar desde la URL
// delete.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$articulos = get_articulos();

// Obtenemos el libro a editarlibro = $libros[$indice];

unset($articulos[$indice]);

// Cargo la vista de edición con los detalles del libro a edi
require_once 'views/edit.view.php';