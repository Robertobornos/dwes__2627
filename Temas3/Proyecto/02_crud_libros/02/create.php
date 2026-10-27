<?php

require_once 'libs/functions.php';

// Solo aceptamos peticiones POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: new.php');
    exit;
}

// Extraer los datos del formulario
$titulo    = htmlspecialchars(trim($_POST['titulo'] ?? ''));
$autor     = htmlspecialchars(trim($_POST['autor'] ?? ''));
$editorial = htmlspecialchars(trim($_POST['editorial'] ?? ''));

// genero llega como array (genero[]); si no se marca ninguno, no existe
$generos_permitidos = ['Novela', 'Ensayo', 'Poesía', 'Teatro', 'Fantasía'];
$genero = array_values(array_intersect(
    (array) ($_POST['genero'] ?? []),
    $generos_permitidos
));

// precio: aceptamos coma o punto como separador decimal
$precio = (float) str_replace(',', '.', $_POST['precio'] ?? '0');

// Nuevo libro (el id se calcula después)
$new_book = [
    'id'        => null,
    'titulo'    => $titulo,
    'autor'     => $autor,
    'editorial' => $editorial,
    'genero'    => $genero,
    'precio'    => $precio,
];

// Obtener los libros actuales
$libros = get_libros();

// Obtener el id para el nuevo libro
$new_book_id = obtener_id_nuevo_libro($libros, $new_book);
$new_book['id'] = $new_book_id;

// Añadir el nuevo libro al array
$libros[] = $new_book;

// Aquí guardas $libros según tu fuente de datos, por ejemplo:
// guardar_libros($libros);

header('Location: index.php');
exit;