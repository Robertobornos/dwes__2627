<?php
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';
session_start();


//generar la lista de marca
$marcas = Tarticulos::getMarcas();
//generar la lista de categoria 
$categorias = Tarticulos::getCategorias();

// Errores y datos previos (si venimos de create.php con fallos)
$errores = $_SESSION['errores'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errores'], $_SESSION['old']);

require __DIR__ . '/views/new.view.php';