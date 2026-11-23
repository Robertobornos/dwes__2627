<?php

// Incluimos el archivo que contiene las funciones necesarias
require_once 'libs/functions.php';

// Obtenemos todas las películas almacenadas
$peliculas = get_peliculas();

// Comprobamos si el formulario se ha enviado mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recogemos el ID de la película y lo convertimos a entero
    // Si no existe el campo ID, asignamos el valor 0
    $id = (int)($_POST['id'] ?? 0);

    // Recogemos los géneros enviados desde el formulario
    // 1. explode() divide la cadena utilizando las comas como separadores
    // 2. array_map('trim', ...) elimina los espacios al principio y al final
    //    de cada género
    // 3. array_filter() elimina los valores vacíos
    // 4. array_values() reorganiza los índices del array
    $generos = array_values(
        array_filter(
            array_map('trim', explode(',', $_POST['generos'] ?? ''))
        )
    );

    // Recorremos el array de películas para encontrar la que queremos modificar
    foreach ($peliculas as $i => $p) {

        // Comprobamos si el ID de la película actual coincide con el ID recibido
        if ($p['id'] === $id) {

            // Sustituimos los datos de la película encontrada por los nuevos datos
            $peliculas[$i] = [

                // Conservamos el ID de la película
                'id'        => $id,

                // Recogemos el título y eliminamos los espacios sobrantes
                'titulo'    => trim($_POST['titulo'] ?? ''),

                // Recogemos el idioma de la película
                'idioma'    => trim($_POST['idioma'] ?? ''),

                // Recogemos el nombre del director
                'director'  => trim($_POST['director'] ?? ''),

                // Guardamos los géneros como un array
                'generos'   => $generos,

                // Recogemos el año y lo convertimos a número entero
                'año'       => (int)($_POST['anio'] ?? 0),

                // Recogemos la duración y la convertimos a número entero
                'duracion'  => (int)($_POST['duracion'] ?? 0),

                // Recogemos la recaudación y la convertimos a número decimal
                'recaudado' => (float)($_POST['recaudado'] ?? 0),
            ];
        }
    }
}

// Incluimos la vista que muestra el contenido de las películas
require 'views/index.view.php';