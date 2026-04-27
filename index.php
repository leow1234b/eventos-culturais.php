<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Eventos Culturais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Eventos Culturais</h2>

<br>
<a href="cadastro.php">+ Novo Evento</a>
<br><br>

<table>
<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Data</th>
    <th>Local</th>
    <th>Ações</th>
</tr>

<?php
$sql = "SELECT * FROM eventos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['titulo']}</td>
        <td>{$row['data_evento']}</td>
        <td>{$row['local']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a class='excluir' href='excluir.php?id={$row['id']}' onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>