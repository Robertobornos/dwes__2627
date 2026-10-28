<?php

/**
 * filtrer.php
 *
 * permite filtrar un libro existente en la tabla de libros
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
// filtre.php?indice=0 - edito el  primer libro
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a editar
$aux=[];
foreach($libros as $libro){

if(array_search( $prompt ,$libro) !==false){

$aux[]=$libro;

}

}
$libros=$aux;
// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';



