<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>


<header class="bg-primary text-white p-3 mb-3 ">

    <i class="bi bi-stack"></i>
    <span class="fs-6">Uso if alternativo</span>
</header>



/* navegador o menu */


<nav>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Articulos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <?php if($perfil=='admin'):?>
           < li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
</nav>

<main>

    <div class="container">
    </div>

</main>

<body>

</body>

</html>