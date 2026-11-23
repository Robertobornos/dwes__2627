<?php
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: new.php');
    exit;
}

$descripcion = trim($_POST['descripcion'] ?? '');
$modelo = trim($_POST['modelo'] ?? '');
$marca = $_POST['marca'] ?? '';
$cats = $_POST['categorias'] ?? [];
$unidades = $_POST['unidades'] ?? '';
$precio = $_POST['precio'] ?? '';

$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();
$errores = [];

if ($descripcion === '') $errores[] = "La descripción es obligatoria.";
if ($modelo === '') $errores[] = "El modelo es obligatorio.";
if ($marca === '' || !isset($marcas[$marca])) $errores[] = "Selecciona una marca válida.";
if (!is_array($cats)) $cats = [];
foreach ($cats as $c) {
    if (!isset($categorias[$c])) { $errores[] = "Categoría no válida."; break; }
}
if ($unidades === '' || filter_var($unidades, FILTER_VALIDATE_INT) === false || (int)$unidades < 0) {
    $errores[] = "Las unidades deben ser un entero igual o mayor que 0.";
}
if ($precio === '' || !is_numeric($precio) || (float)$precio < 0) {
    $errores[] = "El precio debe ser un número igual o mayor que 0.";
}

if ($errores) {
    $_SESSION['errores'] = $errores;
    $_SESSION['old'] = $_POST;
    header('Location: new.php');
    exit;
}

$coleccion = $_SESSION['tarticulos'] ?? null;
if (!$coleccion) {
    $coleccion = new Tarticulos();
    $coleccion->addArticulos();
}

$articulo = new Articulo(
    $coleccion->getSiguienteId(),
    $descripcion,
    $modelo,
    (int)$marca,
    array_map('intval', $cats),
    (int)$unidades,
    (float)$precio
);
$coleccion->addArticulo($articulo);
$_SESSION['tarticulos'] = $coleccion;

header('Location: index.php');
exit;