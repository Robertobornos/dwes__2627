
<!doctype html>
<html lang="es">

<head>
    <!-- Cargar HEAD, meta etiquetas y diseño de la aplicación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.3 - Mostrar Alumno - POO Sin Encapsulamiento</title>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera HEADER de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- Menú principal -->
        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Detalles del Alumno</legend>

                <dl class="row">

                    <dt class="col-sm-3">Id</dt>
                    <dd class="col-sm-9">
                        <?= $alumno->id ?>
                    </dd>

                    <dt class="col-sm-3">Nombre</dt>
                    <dd class="col-sm-9">
                        <?= $alumno->nombre ?>
                    </dd>

                    <dt class="col-sm-3">Apellidos</dt>
                    <dd class="col-sm-9">
                        <?= $alumno->apellidos ?>
                    </dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">
                        <?= $alumno->email ?>
                    </dd>

                    <dt class="col-sm-3">Fecha de nacimiento</dt>
                    <dd class="col-sm-9">
                        <?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?>
                    </dd>

                    <dt class="col-sm-3">Edad</dt>
                    <dd class="col-sm-9">
                        <?= $alumno->getEdad() ?> años
                    </dd>

                    <dt class="col-sm-3">Curso</dt>
                    <dd class="col-sm-9">
                        <?= $cursos[$alumno->curso] ?>
                    </dd>

                    <dt class="col-sm-3">Asignaturas</dt>
                    <dd class="col-sm-9">
                        <?= implode(', ', $tabla_alumnos->indices_asignaturas_a_nombres($alumno->asignaturas)) ?>
                    </dd>

                </dl>

                <a class="btn-solid theme-primary" href="index.php" role="button">
                    Volver
                </a>

            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>