<?php 
session_start();
$db_nome = 'codeflix';
$db_host = 'localhost';
$db_usuario = 'root';
$db_senha = '1234';

$pdo = new PDO("mysql:dbname=".$db_nome.";host=".$db_host, $db_usuario, $db_senha);
