<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM eventos WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>