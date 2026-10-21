<?php



?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.1 - CRUD Libros</title>

    <!-- css bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-3">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.1 - CRUD Libros</span>
        </header>

        <main>
            <div class="content">

                <legend>Tabla de Libros</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Género</th>
                            <th scope="col" class="text-end">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $libro['id'] ?></th>
                                <td><?= $libro['titulo'] ?></td>
                                <td><?= $libro['autor'] ?></td>
                                <td><?= $libro['editorial'] ?></td>
                                <td><?=  implode(',',$libro['genero'])?></td>
                                <td class="text-end"><?= number_format($libro['precio'], 2, ',', '.') ?> €</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>

                            <tr>

                            <td colspan="5" class="text-end">Total</td>
                            <td class="text-end"><?count($libros)?>s</td>
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