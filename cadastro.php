<?php session_start(); ?>
<link rel="stylesheet" href="style.css">

<h2>📝 Novo Evento Cultural</h2>

<form action="salvar.php" method="POST">
    <input type="text" name="titulo" placeholder="Título do evento" required><br><br>
    <textarea name="descricao" placeholder="Descrição detalhada do evento" rows="4" required></textarea><br><br>
    <input type="date" name="data_evento" required><br><br>
    <input type="text" name="local" placeholder="Local do evento" required><br><br>

    <button type="submit">💾 Salvar Evento</button>
    <a href="index.php" style="background-color: #6c757d;">↩️ Cancelar</a>
</form>