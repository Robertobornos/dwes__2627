<?php

/*

Titulo
Parrafo
Enlace

Roberto Pinto
29/09/2026

*/



echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head><meta charset='UTF-8'><title>Ejercicio 1</title></head>";
echo "<body>";

// Título

$titulo = "Última hora: la tecnología transforma la educación";

echo "<h1>$titulo</h1>";


$parrafo =" Cada vez más centros educativos incorporan herramientas digitales en sus aulas,
desde pizarras interactivas hasta plataformas de aprendizaje en línea. <br>
Los expertos destacan que estas herramientas facilitan el acceso a la información
y permiten personalizar el ritmo de estudio de cada alumno. <br>
Sin embargo, también advierten de la necesidad de formar al profesorado
y de garantizar que todos los estudiantes dispongan de los mismos recursos";

// Párrafo de al menos 3 líneas
print "<p>
$parrafo
</p>";


$enlace = "http://www.elpais.es";

// Enlace a El País
echo "<a href='$enlace' target='_blank'>Visitar El País</a>";

echo "</body></html>";
?>