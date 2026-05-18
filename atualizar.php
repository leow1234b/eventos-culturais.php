<?php
session_start();

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data_evento'];
$local = $_POST['local'];

// Atualiza o evento no array
foreach ($_SESSION['eventos'] as $indice => $evento) {
    if ($evento['id'] == $id) {
        $_SESSION['eventos'][$indice]['titulo'] = $titulo;
        $_SESSION['eventos'][$indice]['descricao'] = $descricao;
        $_SESSION['eventos'][$indice]['data_evento'] = $data;
        $_SESSION['eventos'][$indice]['local'] = $local;
        break;
    }
}

header("Location: index.php");
exit();
?>