<?php

require_once __DIR__ .'/class/Alumnos.php';
require_once __DIR__ .'/class/TablaAlumnos.php';

// Recoger datos del formulario
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;

$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;

$asignaturas = isset($_POST['asignaturas'])
    ? array_map('intval', $_POST['asignaturas'])
    : [];

// Crear nuevo alumno
$alumno = new Alumno(
    5,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

// Crear tabla y cargar alumnos de prueba
$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// Añadir alumno
$tabla_alumnos->create($alumno);

// Obtener datos para la vista
$alumnos = $tabla_alumnos->talumnos;

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

include 'views/index.view.php';

?>