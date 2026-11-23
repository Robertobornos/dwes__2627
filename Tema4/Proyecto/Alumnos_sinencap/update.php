
<?php

require_once __DIR__ .'/class/Alumnos.php';
require_once __DIR__ .'/class/TablaAlumnos.php';

// Recoger id
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Recoger datos del formulario
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;

$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;

$asignaturas = isset($_POST['asignaturas'])
    ? array_map('intval', $_POST['asignaturas'])
    : [];

// Crear alumno actualizado
$alumno_actualizado = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

// Crear tabla y cargar alumnos
$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// Buscar posición
$indice = $tabla_alumnos->getIndiceById($id);

if ($indice === null) {
    header('Location: index.php');
    exit;
}

// Actualizar alumno
$tabla_alumnos->update($indice, $alumno_actualizado);

// Obtener datos
$alumnos = $tabla_alumnos->talumnos;

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

// Mostrar listado
include 'views/index.view.php';

?>