<?php 
    require('./../data/config.php');
    $usuario = [];
    $mensagemErro = '';
    if(!empty($_POST['loginEmail']) && !empty($_POST['loginPass'])) {
        $usuarioEmail = htmlspecialchars($_POST['loginEmail']);
        $usuarioSenha = htmlspecialchars($_POST['loginPass']);

        $procurarUsuario = $pdo->prepare("SELECT * FROM usuarios WHERE email = :usuarioEmail AND senha = :usuarioSenha");
        $procurarUsuario->bindValue(':usuarioEmail', $usuarioEmail);
        $procurarUsuario->bindValue(':usuarioSenha', $usuarioSenha);
        $procurarUsuario->execute();

        $usuario = $procurarUsuario->fetch(PDO::FETCH_ASSOC);
        $_SESSION['nomeUsuario'] = $usuario['nome'];

        if($usuario) {
            header('Location: ../../index.php');
        }

    
    } else {
        $mensagemErro = 'campo(s) inválido ou não preenchido';
        header('Location: ../pages/login.php');
    }

?>