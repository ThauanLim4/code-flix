<?php 
session_start();
if (!isset($_SESSION['idUsuario'])) {
    header('Location: ./assets/pages/login.php');
} else {
    $secaoIdUsuario = $_SESSION['idUsuario'] ?? [];
}

$db_nome = 'codeflix';
$db_host = 'localhost';
$db_usuario = 'root';
$db_senha = '1234';

$pdo = new PDO("mysql:dbname=".$db_nome.";host=".$db_host, $db_usuario, $db_senha);
