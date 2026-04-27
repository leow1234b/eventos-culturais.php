<?php
include("conexao.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data_evento'];
$local = $_POST['local'];

$sql = "UPDATE eventos SET 
    titulo='$titulo',
    descricao='$descricao',
    data_evento='$data',
    local='$local'
WHERE id=$id";

$conn->query($sql);

header("Location: index.php");
?>