<?php
session_start();

$id = $_GET['id'];

// Remove o evento do array
foreach ($_SESSION['eventos'] as $indice => $evento) {
    if ($evento['id'] == $id) {
        unset($_SESSION['eventos'][$indice]);
        break;
    }
}

// Reindexa o array para evitar índices quebrados
$_SESSION['eventos'] = array_values($_SESSION['eventos']);

header("Location: index.php");
exit();
?>