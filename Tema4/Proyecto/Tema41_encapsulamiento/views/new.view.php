<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo artículo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; max-width: 500px; }
        label { display: block; margin-top: 1rem; font-weight: bold; }
        input[type=text], input[type=number], select { width: 100%; padding: 6px; }
        .cat { font-weight: normal; display: inline-block; margin-right: 1rem; }
        .errores { background: #fee2e2; border: 1px solid #ef4444; padding: 8px 14px; }
        button { margin-top: 1.5rem; padding: 8px 14px; }
    </style>
</head>
<body>
    <h1>Nuevo artículo</h1>

    <?php if ($errores): ?>
        <div class="errores">
            <ul>
            <?php foreach ($errores as $e): ?>
                <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="create.php" method="POST">
        <label for="descripcion">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" required value="<?= htmlspecialchars($old['descripcion'] ?? '') ?>">

        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo" required value="<?= htmlspecialchars($old['modelo'] ?? '') ?>">

        <label for="marca">Marca</label>
        <select id="marca" name="marca" required>
            <?php foreach ($marcas as $i => $nombre): ?>
                <option value="<?= $i ?>" <?= (isset($old['marca']) && $old['marca'] !== '' && (int)$old['marca'] === $i) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($nombre) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>Categorías</label>
        <?php foreach ($categorias as $i => $nombre): ?>
            <label class="cat">
                <input type="checkbox" name="categorias[]" value="<?= $i ?>"
                    <?= in_array((string)$i, $old['categorias'] ?? [], true) ? 'checked' : '' ?>>
                <?= htmlspecialchars($nombre) ?>
            </label>
        <?php endforeach; ?>

        <label for="unidades">Unidades</label>
        <input type="number" id="unidades" name="unidades" min="0" step="1" required value="<?= htmlspecialchars($old['unidades'] ?? '') ?>">

        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01" required value="<?= htmlspecialchars($old['precio'] ?? '') ?>">

        <button type="submit">Guardar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>