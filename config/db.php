<?php
// config/db.php
$host = 'localhost'; // ou seu host
$db = 'nome_do_banco'; // nome do seu banco de dados
$user = 'usuario'; // seu usuário do banco de dados
$pass = 'senha'; // sua senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar: 