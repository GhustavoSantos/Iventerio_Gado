<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Ganado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="overlay">
        <h1>Agregar Nuevo Ganado</h1>
        <form action="add_action.php" method="post">
            Nombre: <input type="text" name="nome" required><br>
            Edad: <input type="number" name="idade" required><br>
            Raza: <input type="text" name="raça" required><br>
            Peso: <input type="number" step="0.01" name="peso"><br>
            Fecha de Adquisición: <input type="date" name="data_aquisicao"><br>
            <input type="submit" value="Agregar">
        </form>
        <a href="index.php">Volver</a>
    </div>
</body>
</html>
