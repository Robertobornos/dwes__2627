<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Artículos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f0f0f0; }
        td.num { text-align: right; }
        a.btn { display: inline-block; margin-bottom: 1rem; padding: 8px 14px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Panel de artículos</h1>
    <a class="btn" href="new.php">Añadir artículo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Descripción</th><th>Modelo</th><th>Marca</th>
                <th>Categorías</th><th>Unidades</th><th>Precio</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($articulos as $a): ?>
            <tr>
                <td><?= $a->getId() ?></td>
                <td><?= htmlspecialchars($a->getDescripcion()) ?></td>
                <td><?= htmlspecialchars($a->getModelo()) ?></td>
                <td><?= htmlspecialchars($marcas[$a->getMarca()] ?? '—') ?></td>
                <td><?= htmlspecialchars(implode(', ', Tarticulos::indice_categorias_a_nombre_categorias($a->getCategorias()))) ?></td>
                <td class="num"><?= number_format($a->getUnidades(), 0, ',', '.') ?></td>
                <td class="num"><?= number_format($a->getPrecio(), 2, ',', '.') ?> €</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr><td colspan="7"><strong>Total de artículos: <?= count($articulos) ?></strong></td></tr>
        </tfoot>
    </table>
</body>
</html>