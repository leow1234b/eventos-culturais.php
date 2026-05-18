<?php
session_start();

// Verifica se o array existe
if (!isset($_SESSION['eventos'])) {
    $_SESSION['eventos'] = [];
}

if (!isset($_SESSION['proximo_id'])) {
    $_SESSION['proximo_id'] = 1;
}

// Pega os dados do formulário
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data_evento'];
$local = $_POST['local'];

// Cria o novo evento
$novo_evento = [
    'id' => $_SESSION['proximo_id'],
    'titulo' => $titulo,
    'descricao' => $descricao,
    'data_evento' => $data,
    'local' => $local
];

// Adiciona ao array de eventos
$_SESSION['eventos'][] = $novo_evento;

// Incrementa o próximo ID
$_SESSION['proximo_id']++;

// Redireciona para a lista
header("Location: index.php");
exit();
?>