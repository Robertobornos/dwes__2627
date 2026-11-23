<?php

/*

libreria funciones.php
- funciones de utilidad para el proyecto

funciones incluidas:

- get_articulos: Devuelve el array con todos los libros de la tabla libro

*/
function get_articulos() {
    $articulos = [
    [
        'id'          => 1,
        'descripcion' => 'Portátil 15 pulgadas, 16 GB RAM, 512 GB SSD',
        'modelo'      => 'ProBook 450 G10',
        'categoria'   => ['Informática', 'Portátiles'],
        'unidades'    => 25,
        'precio'      => 749.99
    ],
    [
        'id'          => 2,
        'descripcion' => 'Monitor LED 27 pulgadas Full HD',
        'modelo'      => 'UltraView 27F',
        'categoria'   => ['Periféricos', 'Monitores'],
        'unidades'    => 40,
        'precio'      => 189.90
    ],
    [
        'id'          => 3,
        'descripcion' => 'Teclado mecánico inalámbrico retroiluminado',
        'modelo'      => 'KeyMaster K8',
        'categoria'   => ['Periféricos', 'Teclados'],
        'unidades'    => 80,
        'precio'      => 69.95
    ],
    [
        'id'          => 4,
        'descripcion' => 'Smartphone 6,5 pulgadas, 128 GB',
        'modelo'      => 'Nova X12',
        'categoria'   => ['Telefonía', 'Smartphones'],
        'unidades'    => 55,
        'precio'      => 329.00
    ],
    [
        'id'          => 5,
        'descripcion' => 'Auriculares Bluetooth con cancelación de ruido',
        'modelo'      => 'SoundPro ANC 700',
        'categoria'   => ['Audio', 'Auriculares', 'Bluetooth'],
        'unidades'    => 120,
        'precio'      => 129.50
    ],
    [
        'id'          => 6,
        'descripcion' => 'Impresora multifunción WiFi láser',
        'modelo'      => 'LaserJet MFP 3300',
        'categoria'   => ['Impresión', 'Impresoras'],
        'unidades'    => 15,
        'precio'      => 259.99
    ],
];

    return $articulos;
}