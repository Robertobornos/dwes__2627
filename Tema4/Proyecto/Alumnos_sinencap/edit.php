<?php

require_once __DIR__ .'/class/Alumnos.php';
require_once __DIR__ .'/class/TablaAlumnos.php';

// Recoger id
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Crear tabla
$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// Buscar índice del alumno
$indice = $tabla_alumnos->getIndiceById($id);

if ($indice === null) {
    header('Location: index.php');
    exit;
}

// Leer alumno
$alumno = $tabla_alumnos->read($indice);

// Obtener cursos y asignaturas
$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

// Mostrar formulario
include 'views/edit.view.php';

?>