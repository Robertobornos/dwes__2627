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


$parrafo = " Cada vez más centros educativos incorporan herramientas digitales en sus aulas,
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
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
" rel="stylesheet">
</head>

<body>
    <h1>Hola mundo</h1>

    <div class="container mt-3">


        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Titulo de aplicación</span>
        </header>

        <main>
            <div class="content">
                <h2>Contenido principal</h2>
                <p>Este es el contenido principal de la página.</p>

        </main>


        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy ; 2026
                    Roberto Pinto Gutiérrez - DWES - 2º DAW - 26/27</span>
                </span>
            </div>
        </footer>

        <!-- Bootstrap JS 5.3.8-->
        <script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js
"></script>
    </div>
</body>

</html>