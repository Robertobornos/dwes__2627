<?php

/**
 * update.php
 *
 * permite editar un libro existente en la tabla de libros
 *
 * @package    CRUD Libros
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del libro a editar desde la URL
// edit.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Cargar el array de libros
$libros = get_libros();


// Validar el índice recibido

$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');



$edit_book = [
    'id' => $libro[$indice]['id'],
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'generos' => explode(', ', $generos),
    'precio' => $precio
];


// Obtenemos el libro a editar
$libro[$indice]= $edit_book;


// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/edit.view.php';



