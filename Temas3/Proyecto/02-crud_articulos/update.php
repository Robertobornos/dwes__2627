<?php


// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del libro a editar desde la URL
// update.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Cargar el array de libros
$articulos = get_articulos();

// Cargo los datos del formulario
$descripcion= htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = explode(', ', $_POST['categorias'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Crear array asociativo con los datos del libro editado
$edit_articulo = [
    'id'          => $articulos[$indice]['id'],
    'descripcion' => $descripcion,
    'modelo'      => $modelo,
    'categorias'  => $categorias,
    'unidades'    => (int) $unidades,
    'precio'      => (float) $precio
];
// Actualizar el libro en el array de libros
$articulos[$indice] = $edit_articulo    ;

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';