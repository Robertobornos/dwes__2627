<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Roberto Cálculo del movimiento rectilíneo uniformemente
        acelerado (MRUA)</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-calculator-fill"></i>
            <span class="fs-6">Resultados del MRUA</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>



            <div class="content">


                <h5>Datos de entrada</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Dato</th>
                            <th class="text-end">Valor</th>
                            <th>Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Velocidad inicial</td>
                            <td class="text-end"><?= $v0_formato ?></td>
                            <td>m/s</td>
                        </tr>
                        <tr>
                            <td>Aceleración</td>
                            <td class="text-end"><?= $a_formato ?></td>
                            <td>m/s²</td>
                        </tr>
                        <tr>
                            <td>Tiempo transcurrido</td>
                            <td class="text-end"><?= $t_formato ?></td>
                            <td>s</td>
                        </tr>
                        <tr>
                            <td>Masa del cuerpo</td>
                            <td class="text-end"><?= $m_formato ?></td>
                            <td>kg</td>
                        </tr>
                    </tbody>
                </table>

                <h5>Resultados</h5>



                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Magnitud</th>
                            <th class="text-end">Valor</th>
                            <th>Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- Datos de la velocidad final -->
                            <td>Velocidad final</td>
                            <td class="text-end"><?= $velocidad_final ?></td>
                            <td>m/s</td>
                        </tr>
                        <tr>
                            <!-- Datos del espacio recorrido -->
                            <td>Espacio recorrido</td>
                            <td class="text-end"><?= $espacio_recorrido ?></td>
                            <td>m</td>
                        </tr>
                        <tr>
                            <!-- Datos de la fuerza neta -->
                            <td>Fuerza neta</td>
                            <td class="text-end"><?= $fuerza_neta ?></td>
                            <td>N</td>
                        </tr>
                        <tr>
                            <!-- Datos de la energía cinética final -->
                            <td>Energía cinética final</td>
                            <td class="text-end"><?= $energia_cinetica_final ?></td>
                            <td>J</td>
                        </tr>
                    </tbody>
                </table>



                <!-- botones de acción -->
                <div class="btn-group" role="group">
                    <!-- Botón para realizar un nuevo cálculo -->
                    <a class="btn btn-warning" href="index.php" role="button">Nuevo cálculo</a>
                </div>

            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Roberto Pinto Gutiérrez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
</body>

</html>