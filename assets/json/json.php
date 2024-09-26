<?php 

header("Content-type: aplication/json");
header('Access-Control-Allow-Origin: *');

$db_host = 'localhost';
$db_nome = 'codeflix';
$db_usuario = 'root';
$db_senha = '1234';

$conexao = new mysqli($db_host, $db_usuario, $db_senha, $db_nome);
if($conexao->connect_error){
    die("conexão fracassada").$conexao->connect_error;
}

$result = $conexao->query("SELECT * FROM cursos");

if($result->num_rows > 0){

    $apiCursos = array();
    while($cursos = $result->fetch_all()){
        $apiCursos = $cursos;
    }
    
    echo json_encode($apiCursos);
} else {
    echo json_encode(["mensagem" => "nenhum curso encontrado"]);
}
$conexao->close();

?>