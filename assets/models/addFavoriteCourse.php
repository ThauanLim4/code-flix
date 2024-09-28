<?php 
require('./../data/config.php');


$cursoIdUrl = $_GET['result'];
$cursoIdUrlConvert = (int)$cursoIdUrl;
$cursoInfosLista = [];

if ($cursoIdUrlConvert) {
    $cursoInfos = $pdo->prepare("SELECT * FROM cursos WHERE id = :id");
    $cursoInfos->bindValue(':id', $cursoIdUrlConvert);
    $cursoInfos->execute();

    if ($cursoInfos->rowCount() > 0) {
        $cursoInfosLista = $cursoInfos->fetch(PDO::FETCH_ASSOC);
    }
}

$cursoNome = $cursoInfosLista['nome'];
$cursoImagem = $cursoInfosLista['imagem'];
$cursoAulas = $cursoInfosLista['quantAulas'];
$cursoLink = $cursoInfosLista['link'];



if(!empty($_SESSION['idUsuario'])){
    $idDoUsuario = $_SESSION['idUsuario'];

    $cursosFavConnection = $pdo->prepare("INSERT INTO cursosfavoritados (id, idDoUsuario, nome, imagem, quantAulas, link) VALUES (:idDoCurso, :idDoUsuario, :cursoNome, :cursoImagem, :cursoAulas, :cursoLink)");
    $cursosFavConnection->bindValue(':idDoCurso', $cursoIdUrlConvert);
    $cursosFavConnection->bindValue(':idDoUsuario', $idDoUsuario);
    $cursosFavConnection->bindValue(':cursoNome', $cursoNome);
    $cursosFavConnection->bindValue(':cursoImagem', $cursoImagem);
    $cursosFavConnection->bindValue(':cursoAulas', $cursoAulas);
    $cursosFavConnection->bindValue(':cursoLink', $cursoLink);
    $cursosFavConnection->execute();

    header("Location: ./../pages/courseInfos.php?result=$cursoIdUrlConvert");
} else {
    header("Location: ./../pages/courseInfos.php?result=$cursoIdUrl");
    exit;
}

var_dump($cursoNome);
var_dump($cursoIdUrlConvert);
