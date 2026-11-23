<?php

// Rutas absolutas
require_once __DIR__. 'clases/Alumno.php';

// Crear un objeto de la clase alumno
$c1 = new Alumno('1', 'Paco', 'Benítez Pérez', 'Villadroga', 'pacobp@gmail.com', '629871167', '1DAW');

var_dump($c1);

$c1->getNombre();
echo '<br>';
$c1->getPoblacion();
echo '<br>';
$c1->getEmail();
echo '<br>';

$c2 = new Alumno();
var_dump($c2);
$c2->setNombre('Emilio');
$c2->setPoblacion('Andorra');
$c2->setCurso('1ESO');