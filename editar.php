<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM eventos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<link rel="stylesheet" href="style.css">

<h2>Editar Evento</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"><br><br>
    <textarea name="descricao"><?php echo $row['descricao']; ?></textarea><br><br>
    <input type="date" name="data_evento" value="<?php echo $row['data_evento']; ?>"><br><br>
    <input type="text" name="local" value="<?php echo $row['local']; ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>