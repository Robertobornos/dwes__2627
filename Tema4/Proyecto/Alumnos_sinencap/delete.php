<?php

require_once __DIR__ .'/class/Alumnos.php';
require_once __DIR__ .'/class/TablaAlumnos.php';

// Recoger id
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Crear tabla
$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// Buscar índice
$indice = $tabla_alumnos->getIndiceById($id);

if ($indice !== null) {

    // Eliminar alumno
    $tabla_alumnos->delete($indice);
}

// Obtener datos
$alumnos = $tabla_alumnos->talumnos;

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

// Mostrar listado
include 'views/index.view.php';

?>