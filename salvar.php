<?php
include("conexao.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data_evento'];
$local = $_POST['local'];

$sql = "INSERT INTO eventos (titulo, descricao, data_evento, local)
VALUES ('$titulo', '$descricao', '$data', '$local')";

$conn->query($sql);

header("Location: index.php");
?>