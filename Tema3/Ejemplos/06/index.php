<?php

/* Switch alternativo

   Dependiendo de la calificación devuelve:
     - Insuficiente
     - Suficiente
     - Bien
     - Notable
     - Sobresaliente
*/

$nota = 7;

switch (true) {

    case ($nota < 0 || $nota > 10):
        echo 'Nota no válida';
        break;

    case ($nota < 5):
        echo 'Insuficiente';
        break;

    case ($nota < 6):
        echo 'Suficiente';
        break;

    case ($nota < 7):
        echo 'Bien';
        break;

    case ($nota < 9):
        echo 'Notable';
        break;

    default:
        echo 'Sobresaliente';
        break;
}

?>