<?php
$host = "127.0.0.1:3307"; // ← IMPORTANTE (porta do seu MySQL)
$user = "root";
$pass = "";
$db = "agenda eventos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>