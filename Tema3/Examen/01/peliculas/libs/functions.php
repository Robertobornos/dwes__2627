<?php

function get_peliculas()
{
    // película base
    $pelicula = [
        'id'        => 1,
        'titulo'    => 'El viaje infinito',
        'idioma'    => 'Español',
        'director'  => 'Ana Ruiz',
        'generos'   => ['ficción', 'aventura'],
        'año'       => 2015,
        'duracion'  => 120,
        'recaudado' => 28.3,
    ];

    $peliculas = [];
    $peliculas[] = $pelicula;

    $pelicula['id'] = 2;
    $pelicula['titulo'] = 'Noches de Sevilla';
    $pelicula['idioma'] = 'Español';
    $pelicula['director'] = 'Luis Prado';
    $pelicula['generos'] = ['romántica', 'drama'];
    $pelicula['año'] = 2017;
    $pelicula['duracion'] = 105;
    $pelicula['recaudado'] = 12.5;
    $peliculas[] = $pelicula;

    $pelicula['id'] = 3;
    $pelicula['titulo'] = 'Mission Code';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'John Carter';
    $pelicula['generos'] = ['acción', 'thriller'];
    $pelicula['año'] = 2019;
    $pelicula['duracion'] = 133;
    $pelicula['recaudado'] = 310.8;
    $peliculas[] = $pelicula;

    $pelicula['id'] = 4;
    $pelicula['titulo'] = 'El último vals';
    $pelicula['idioma'] = 'Francés';
    $pelicula['director'] = 'Marie Dubois';
    $pelicula['generos'] = ['drama', 'romántica'];
    $pelicula['año'] = 2020;
    $pelicula['duracion'] = 98;
    $pelicula['recaudado'] = 15.2;
    $peliculas[] = $pelicula;

    $pelicula['id'] = 5;
    $pelicula['titulo'] = 'Códigos secretos';
    $pelicula['idioma'] = 'Alemán';
    $pelicula['director'] = 'Hans Müller';
    $pelicula['generos'] = ['thriller', 'misterio'];
    $pelicula['año'] = 2021;
    $pelicula['duracion'] = 110;
    $pelicula['recaudado'] = 45.7;
    $peliculas[] = $pelicula;

    $pelicula['id'] = 6;
    $pelicula['titulo'] = 'La ciudad perdida';
    $pelicula['idioma'] = 'Español';
    $pelicula['director'] = 'Carlos López';
    $pelicula['generos'] = ['aventura', 'acción'];
    $pelicula['año'] = 2022;
    $pelicula['duracion'] = 125;
    $pelicula['recaudado'] = 75.4;
    $peliculas[] = $pelicula;

    return $peliculas;
}

/**
 * Devuelve el nuevo id para la tabla películas (máximo id + 1).
 */
function obtener_id_nueva_pelicula($peliculas = [])
{

    $ultima_pelicula=end($peliculas);

    $ultimo_id=$ultima_pelicula['id'] ?? 0;

   
    return $ultimo_id + 1;
}