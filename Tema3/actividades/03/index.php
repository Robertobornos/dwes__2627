<?php
// Matriz de datos: libros
// Índice principal escalar (0, 1, 2...) e índice secundario asociativo
$libros = [
    [
        "id"     => 1,
        "titulo" => "Don Quijote de la Mancha",
        "autor"  => "Miguel de Cervantes",
        "genero" => "Novela",
        "precio" => 19.95
    ],
    [
        "id"     => 2,
        "titulo" => "Cien años de soledad",
        "autor"  => "Gabriel García Márquez",
        "genero" => "Realismo mágico",
        "precio" => 15.50
    ],
    [
        "id"     => 3,
        "titulo" => "La sombra del viento",
        "autor"  => "Carlos Ruiz Zafón",
        "genero" => "Misterio",
        "precio" => 12.90
    ],
    [
        "id"     => 4,
        "titulo" => "1984",
        "autor"  => "George Orwell",
        "genero" => "Distopía",
        "precio" => 10.75
    ],
    [
        "id"     => 5,
        "titulo" => "El Principito",
        "autor"  => "Antoine de Saint-Exupéry",
        "genero" => "Fábula",
        "precio" => 8.95
    ]
];

// Carga de la vista
include "views/index.views.php";