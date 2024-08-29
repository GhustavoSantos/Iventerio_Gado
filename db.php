<?php
$servername = "localhost";
$username = "root"; // Usuário padrão do Laragon
$password = ""; // Senha padrão do Laragon
$dbname = "inventario_gado";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
