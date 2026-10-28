    <?php

    /**
     * ordenar.php
     *
     * permite ordenar un libro existente en la tabla de libros
     *
     * @package    CRUD Libros
     * @author     Tu Nombre
     * @version    1.0
     * 
     * Tabla  libros:
        *  - id 
        *  - titulo 
        *  - autor 
        *  - editorial 
        *  - generos 
        *  - precio 

    */

    // Cargar librerias
    require_once 'libs/functions.php';

    // Models

    // Negociado
    // Obtener el criterio=titulo de orden del libro a editar desde la URL
    // order.php?criterio=titulo - ordena por titulo
    $criterio = htmlspecialchars($_GET['criterio'] ?? null);

    // Validar el índice recibido

    // Cargar el array de libros
    $libros = get_libros();

    // ordenar el array de libros 
    $array_criterio=array_column($libros,$criterio);
    array_multisort($array_criterio,SORT_ASC,$libros);

    // Cargo la vista de edición con los detalles del libro a editar
    require_once 'views/index.view.php';



