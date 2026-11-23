<?php

/*

libreria funciones.php
- funciones de utilidad para el proyecto

funciones incluidas:

- get_libros() : Devuelve el array con todos los libros de la tabla libro

*/
function get_libros() {
    $libros = [
        [
            'id'        => 1,
            'titulo'    => 'Yo',
            'autor'     => 'Roberto Pinto',
            'editorial' => 'Anaya',
            'genero'    => ['Programación', 'Técnico'],
            'precio'    => 29.99
        ],
        [
            'id'        => 2,
            'titulo'    => 'Cien años de soledad',
            'autor'     => 'Gabriel García Márquez',
            'editorial' => 'Sudamericana',
            'genero'    => ['Novela', 'Realismo mágico'],
            'precio'    => 19.95
        ],
        [
            'id'        => 3,
            'titulo'    => 'El Quijote',
            'autor'     => 'Miguel de Cervantes',
            'editorial' => 'Alfaguara',
            'genero'    => ['Clásico', 'Novela'],
            'precio'    => 24.50
        ],
        [
            'id'        => 4,
            'titulo'    => 'Clean Code',
            'autor'     => 'Robert C. Martin',
            'editorial' => 'Prentice Hall',
            'genero'    => ['Programación'],
            'precio'    => 39.90
        ],
        [
            'id'        => 5,
            'titulo'    => 'La sombra del viento',
            'autor'     => 'Carlos Ruiz Zafón',
            'editorial' => 'Planeta',
            'genero'    => ['Misterio', 'Novela'],
            'precio'    => 22.00
        ]
    ];

    return $libros;
}