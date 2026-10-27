
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD Artículos</title>

    <!-- css bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new.php">Añadir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.2 - CRUD Artículos</span>
        </header>

        <main class="pb-5">
            <div class="content">

                <legend>Tabla de Artículos</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">id</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Categoría</th>
                            <th scope="col" class="text-end">Unidades</th>
                            <th scope="col" class="text-end">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                                <td><?= $articulo['descripcion'] ?></td>
                                <td><?= $articulo['modelo'] ?></td>
                                <td><?= implode(', ', $articulo['categoria']) ?></td>
                                <td class="text-end"><?= $articulo['unidades'] ?></td>
                                <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end">Total artículos</td>
                            <td class="text-end"><?= count($articulos) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Roberto Pinto Gutiérrez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

    </div>

    <!-- js bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>