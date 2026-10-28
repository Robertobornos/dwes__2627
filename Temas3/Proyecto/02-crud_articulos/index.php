<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de artículos.
 * Muestra la tabla de artículos ordenada por id.
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
$articulos = get_articulos();

// Views
include 'views/index.view.php';