<?php
include 'db.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$raça = $_POST['raça'];
$peso = $_POST['peso'];
$data_aquisicao = $_POST['data_aquisicao'];

$sql = "INSERT INTO gado (nome, idade, raça, peso, data_aquisicao)
VALUES ('$nome', '$idade', '$raça', '$peso', '$data_aquisicao')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
?>
