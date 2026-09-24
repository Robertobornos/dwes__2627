<?php

    $nombre = "Roberto";
    $apellido = "Pinto";
    $edad = 20;
    $poblacion = "Bornos";

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">a
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Alumnos</title>
</head>
<body>

    <h1>Ficha de Alumnos</h1>

    
    <?php
        //mostrar los datos del alumno
         echo "<b>Nombre:</b> " . $nombre . "<br>"; 
         echo "<b>Apellido:</b> " . $apellido . "<br>";
         echo "<b>Edad:</b> " . $edad . "<br>";
         echo "<b>Población:</b> " . $poblacion . "<br>";
                

    ?>


</body>
</html> 