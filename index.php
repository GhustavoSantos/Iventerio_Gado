<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Ganado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="overlay">
        <h1>Inventario de Ganado</h1>
        <a href="add.php">Agregar Nuevo Ganado</a>

        <?php
        $sql = "SELECT * FROM gado";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Raza</th><th>Peso</th><th>Fecha de Adquisición</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["idade"]. "</td><td>" . $row["raça"]. "</td><td>" . $row["peso"]. "</td><td>" . $row["data_aquisicao"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 resultados";
        }
        ?>
    </div>
</body>
</html>
