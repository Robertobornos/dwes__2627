<?php
// Aquí debes cargar el array $libros (require, base de datos, etc.)
// Ejemplo: require 'datos.php';
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

        <main class="pb-5">
            <div class="content">

                <legend>Formulario Nuevo Libro</legend>

                <form action="create.php" method="POST">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>

                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Género</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="gen-novela" name="genero[]" value="Novela">
                            <label class="form-check-label" for="gen-novela">Novela</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="gen-ensayo" name="genero[]" value="Ensayo">
                            <label class="form-check-label" for="gen-ensayo">Ensayo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="gen-poesia" name="genero[]" value="Poesía">
                            <label class="form-check-label" for="gen-poesia">Poesía</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="gen-teatro" name="genero[]" value="Teatro">
                            <label class="form-check-label" for="gen-teatro">Teatro</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="gen-fantasia" name="genero[]" value="Fantasía">
                            <label class="form-check-label" for="gen-fantasia">Fantasía</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <div class="input-group">
                            <input type="number" class="form-control text-end" id="precio" name="precio"
                                step="0.01" min="0" required>
                            <span class="input-group-text">€</span>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-lg"></i> Guardar
                        </button>
                        <button type="reset" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-counterclockwise"></i> Limpiar
                        </button>
                        <a href="index.php" class="btn btn-outline-danger">
                            <i class="bi bi-x-lg"></i> Cancelar
                        </a>
                    </div>

                </form>

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