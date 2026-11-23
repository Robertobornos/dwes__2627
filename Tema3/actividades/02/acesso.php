<?php

// Perfiles disponibles: clave => nombre visible
$perfiles = [
    'admin' => 'Administrador',
    'edit'  => 'Editor',
    'user'  => 'Usuario',
];


// Recoger y limpiar los datos
$nombre   = trim($_POST['nombre'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$perfil   = $_POST['perfil'] ?? '';





include 'views/acceso.views.php';