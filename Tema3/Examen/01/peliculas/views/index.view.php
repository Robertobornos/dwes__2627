<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Examen 3.1 - CRUD Peliculas</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Examen 3.1 - CRUD Peliculas</span>
        </header>


        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Películas</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>

                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="new.php">Nuevo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="filter.php">Ordenar</a>
                            </li>

                            <li class="nav-item">
                              
                                <div class="menu">
                                    <a class="menu-item" href="#">Id</a>
                                    <a class="menu-item" href="#">Título</a>
                                    <a class="menu-item" href="#">Año</a>
                                    <a class="menu-item" href="#">Duracion</a>
                                    <a class="menu-item" href="#">Idioma</a>
                                    <a class="menu-item" href="#">Director</a>
                                    <a class="menu-item" href="#">Recaudación</a>
                                    <hr class="menu-divider">
                                </div>
                            </li>

                        </ul>
                        <form class="hstack gap-2" role="search" action="filter.php" method="get">
                            <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar" name="buscar"/>
                            <button class="btn-solid btn-icon theme-secondary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </dialog>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Tabla de Películas</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Título</th>
                            <th>Idioma</th>
                            <th>Director</th>
                            <th>Géneros</th>
                            <th>Año</th>
                            <th>Duración </th>
                            <th>Recaudado M$</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peliculas as $pelicula): ?>
                            <tr>
                                <td><?= $pelicula['id'] ?></td>
                                <td><?= htmlspecialchars($pelicula['titulo']) ?></td>
                                <td><?= htmlspecialchars($pelicula['idioma']) ?></td>
                                <td><?= htmlspecialchars($pelicula['director']) ?></td>
                                <td><?= htmlspecialchars(implode(', ', $pelicula['generos'])) ?></td>
                                <td><?= $pelicula['año'] ?></td>
                                <td class="text-center"><?= $pelicula['duracion'] ?> </td>
                                <td class="text-center"><?= number_format($pelicula['recaudado'], 1, ',', '.')  ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $pelicula['id'] ?>" title="Editar"><i class="bi bi-pencil"></i></a>    
                                    <a href="#" title="Eliminar"><i class="bi bi-trash"></i></a>
                                    <a   href="mostrar.php?id=<?= $pelicula['id'] ?>" title="Mostrar"><i class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9" class="text-end">Total películas</td>
                            <td><?= count($peliculas) ?></td>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Roberto Pinto Gutierrez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>