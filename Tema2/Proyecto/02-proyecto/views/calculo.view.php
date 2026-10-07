<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Resultado Lanzamiento Proyectiles</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container mt-3 mb-5 pb-5">

        <!-- cabecera -->
        <div class="p-4 mb-4 bg-light border rounded">
            <h1 class="display-5">Lanzamiento Proyectiles</h1>
            <p class="text-muted">Proyecto 2.2 - DWES 26/27</p>
            <hr>
            <p>Resultado</p>
        </div>

        <main>
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="2">Valores Iniciales:</th>
                    </tr>
                    <tr>
                        <td>Velocidad Inicial:</td>
                        <td><?= number_format($velocidad_inicial, 2, ',', '.') ?> m/s</td>
                    </tr>
                    <tr>
                        <td>Ángulo Inclinación:</td>
                        <td><?= number_format($angulo_lanzamiento, 0, ',', '.') ?> º</td>
                    </tr>

                    <tr>
                        <th colspan="2">Resultados:</th>
                    </tr>
                    <tr>
                        <td>Ángulo Radianes:</td>
                        <td><?= number_format($angulo_radianes, 5, ',', '.') ?> Radianes</td>
                    </tr>
                    <tr>
                        <td>Velocidad Inicial X:</td>
                        <td><?= number_format($velocidad_inicial_x, 2, ',', '.') ?> m/s</td>
                    </tr>
                    <tr>
                        <td>Velocidad Inicial Y:</td>
                        <td><?= number_format($velocidad_inicial_y, 2, ',', '.') ?> m/s</td>
                    </tr>
                    <tr>
                        <td>Alcance Máximo del Proyectil:</td>
                        <td><?= number_format($alcance_maximo, 2, ',', '.') ?> m</td>
                    </tr>
                    <tr>
                        <td>Tiempo de Vuelo del proyectil:</td>
                        <td><?= number_format($tiempo_vuelo, 2, ',', '.') ?> s</td>
                    </tr>
                    <tr>
                        <td>Altura Máxima del Proyectil:</td>
                        <td><?= number_format($altura_maxima, 2, ',', '.') ?> m</td>
                    </tr>
                </tbody>
            </table>

            <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </main>

        <!-- pie de página -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Roberto Pinto Gutiérrez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </div>
  </body>
</html>