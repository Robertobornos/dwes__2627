<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los artículos.
        - obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo.
        - e($texto): Escapa texto para mostrarlo de forma segura en HTML.
*/

// Devuelve un array con todos los artículos (simulando una base de datos)
function get_articulos() {
    return [
        [
            'id' => 1,
            'descripcion' => 'Smartphone Galaxy A55',
            'modelo' => 'SM-A556B',
            'categorias' => ['telefonía', 'electrónica'],
            'unidades' => 25,
            'precio' => 429.99
        ],
        [
            'id' => 2,
            'descripcion' => 'Cámara réflex EOS 250D',
            'modelo' => 'EOS 250D',
            'categorias' => ['fotografía'],
            'unidades' => 8,
            'precio' => 649.00
        ],
        [
            'id' => 3,
            'descripcion' => 'Auriculares inalámbricos',
            'modelo' => 'WH-1000XM5',
            'categorias' => ['audio', 'electrónica'],
            'unidades' => 40,
            'precio' => 349.99
        ],
        [
            'id' => 4,
            'descripcion' => 'Portátil IdeaPad 15"',
            'modelo' => 'IdeaPad 3',
            'categorias' => ['informática'],
            'unidades' => 12,
            'precio' => 599.99
        ],
        [
            'id' => 5,
            'descripcion' => 'Smartphone con cámara 108 Mpx',
            'modelo' => 'Redmi Note 13',
            'categorias' => ['telefonía', 'fotografía'],
            'unidades' => 30,
            'precio' => 299.90
        ]
    ];
}

// Devuelve el id del nuevo artículo (último id + 1)
function obtener_id_nuevo_articulo($articulos = []) {
    if (empty($articulos)) {
        return 1;
    }
    $ultimo = end($articulos);
    return $ultimo['id'] + 1;
}

// Escapa texto para evitar XSS al imprimirlo en las vistas
function e($texto) {
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}