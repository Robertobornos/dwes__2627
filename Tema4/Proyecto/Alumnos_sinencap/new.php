<?php

require_once __DIR__ .'/class/Alumnos.php';
require_once __DIR__ .'/class/TablaAlumnos.php';

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

include 'views/new.view.php';

?>