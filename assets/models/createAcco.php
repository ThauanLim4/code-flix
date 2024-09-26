<?php 
    require('./../data/config.php');
    $mensagemErro = '';
    if(!empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userPass'])) {
        $usuarioNome = htmlspecialchars($_POST['userName']);
        $usuarioEmail = htmlspecialchars($_POST['userEmail']);
        $usuarioSenha = htmlspecialchars($_POST['userPass']);

        var_dump($usuarioNome);

        $criarUsuario = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:usuarioNome, :usuarioEmail, :usuarioSenha)");
        $criarUsuario->bindValue(':usuarioNome', $usuarioNome);
        $criarUsuario->bindValue(':usuarioEmail', $usuarioEmail);
        $criarUsuario->bindValue(':usuarioSenha', $usuarioSenha);
        $criarUsuario->execute();

        header('Location: ../pages/login.php');
    
    } else {
        $mensagemErro = 'campo(s) inválido ou não preenchido';
        header('Location: ../pages/createAccount.php');
    }

?>