<?php

/**
 * create.php
 *
 * Crea un nuevo artículo a partir de los datos enviados desde el formulario
 * de new.php y muestra la tabla con el nuevo artículo añadido.
 * El artículo no persiste: al volver a cargar, la tabla original reaparece.
 *
 * @package    CRUD Artículos
 * @author     Roberto Pinto Gutiérrez
 * @version    1.0
 *
 * Tabla artículos:
 *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 *  - descripcion (VARCHAR(255))
 *  - modelo (VARCHAR(255))
 *  - categorias (array de categorías)
 *  - unidades (INT)
 *  - precio (DECIMAL)
 */

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado

// Si se accede sin enviar el formulario, volver a la tabla
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Extraer los datos del formulario (el escapado se hace en la vista con e())
$descripcion = trim($_POST['descripcion'] ?? '');
$modelo      = trim($_POST['modelo'] ?? '');
$categorias  = trim($_POST['categorias'] ?? '');
$unidades    = trim($_POST['unidades'] ?? '');
$precio      = trim($_POST['precio'] ?? '');

// Proceso de validación de los datos del formulario (pendiente)

// Obtener el array de artículos existente
$articulos = get_articulos();

// Obtener id del nuevo artículo (último id + 1)
$new_articulo_id = obtener_id_nuevo_articulo($articulos);

// Convertir categorías "a, b" en array, descartando vacías
$array_categorias = array_values(array_filter(
    array_map('trim', explode(',', $categorias)),
    fn($c) => $c !== ''
));

// Crear array asociativo del nuevo artículo
$new_articulo = [
    'id'          => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo'      => $modelo,
    'categorias'  => $array_categorias,
    'unidades'    => (int) $unidades,
    'precio'      => (float) $precio
];

// Agregar el nuevo artículo al array de artículos
$articulos[] = $new_articulo;

// Views
include 'views/index.view.php';