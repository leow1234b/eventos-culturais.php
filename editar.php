<?php
session_start();

$id = $_GET['id'];

// Busca o evento pelo ID
$evento_encontrado = null;
foreach ($_SESSION['eventos'] as $evento) {
    if ($evento['id'] == $id) {
        $evento_encontrado = $evento;
        break;
    }
}

// Se não encontrar, volta para o index
if (!$evento_encontrado) {
    header("Location: index.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<h2>✏️ Editar Evento</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $evento_encontrado['id']; ?>">

    <input type="text" name="titulo" value="<?php echo htmlspecialchars($evento_encontrado['titulo']); ?>" required><br><br>
    <textarea name="descricao" rows="4" required><?php echo htmlspecialchars($evento_encontrado['descricao']); ?></textarea><br><br>
    <input type="date" name="data_evento" value="<?php echo $evento_encontrado['data_evento']; ?>" required><br><br>
    <input type="text" name="local" value="<?php echo htmlspecialchars($evento_encontrado['local']); ?>" required><br><br>

    <button type="submit">🔄 Atualizar Evento</button>
    <a href="index.php" style="background-color: #6c757d;">↩️ Cancelar</a>
</form>