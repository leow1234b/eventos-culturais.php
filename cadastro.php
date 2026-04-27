<link rel="stylesheet" href="style.css">

<h2>Novo Evento</h2>

<form action="salvar.php" method="POST">
    <input type="text" name="titulo" placeholder="Título"><br><br>
    <textarea name="descricao" placeholder="Descrição"></textarea><br><br>
    <input type="date" name="data_evento"><br><br>
    <input type="text" name="local" placeholder="Local"><br><br>

    <button type="submit">Salvar</button>
</form>