<?php

    $nombre = "Roberto";
    $apellido = "Pinto";
    $edad = 20;
    $poblacion = "Bornos";

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Alumnos</title>
</head>
<body>

    <h1>Ficha de Alumnos</h1>
    
<?php
    echo "<b>Nombre:</b>   $nombre  <br>"; 
    
    echo '<b>Nombre:</b> "$nombre" <br>';

    echo '<b>Nombre:</b>   ' . $nombre . '<br>';
    ?>

</body>
</html> 