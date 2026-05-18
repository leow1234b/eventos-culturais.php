<?php
session_start();

// Inicializa array de eventos se não existir
if (!isset($_SESSION['eventos'])) {
    $_SESSION['eventos'] = [];
}

// Gera IDs automáticos
if (!isset($_SESSION['proximo_id'])) {
    $_SESSION['proximo_id'] = 1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eventos Culturais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>📅 Eventos Culturais</h2>

<br>
<a href="cadastro.php">➕ Novo Evento</a>
<br><br>

<?php if (empty($_SESSION['eventos'])): ?>
    <p style="color: #666;">Nenhum evento cadastrado ainda. Clique em "Novo Evento" para começar!</p>
<?php else: ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Local</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($_SESSION['eventos'] as $evento): ?>
        <tr>
            <td><?php echo $evento['id']; ?></td>
            <td><?php echo htmlspecialchars($evento['titulo']); ?></td>
            <td><?php echo htmlspecialchars($evento['descricao']); ?></td>
            <td><?php echo date('d/m/Y', strtotime($evento['data_evento'])); ?></td>
            <td><?php echo htmlspecialchars($evento['local']); ?></td>
            <td>
                <a href='editar.php?id=<?php echo $evento['id']; ?>'>✏️ Editar</a>
                <a class='excluir' href='excluir.php?id=<?php echo $evento['id']; ?>' onclick="return confirm('Tem certeza que deseja excluir?')">🗑️ Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>