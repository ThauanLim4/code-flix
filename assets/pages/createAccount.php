<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faça login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="./../styles/login.css?v<?php echo time(); ?>">
</head>

<body>
    <main class="mainContainer">
        <div class="maincontent">

            <section class="sectionLogin">
                <div class="imgLogin">
                    <img class="bannerCreateAcc" src="./../images/createAccount.svg" alt="">
                </div>
                <div class="areaLogin">
                    <h2>Crie sua <span>conta </span></h2>
                    <form action="./../models/createAcco.php" method="post">

                        <div class="fieldInput">
                            <p>nome</p>
                            <input type="text" name="userName" class="field">
                            <span class="bar"></span>
                        </div>

                        <div class="fieldInput">
                            <p>email</p>
                            <input type="email" name="userEmail" class="field">
                            <span class="bar"></span>
                        </div>

                        <div class="fieldInput">
                            <p>senha</p>
                            <input type="password" name="userPass" class="field">
                            <span class="bar"></span>
                        </div>

                        <input type="submit" class="btnLogin" value="Criar conta">
                    </form>

                    <hr>

                    <div class="areaCreateAccount">
                        <p>já possui uma conta? Então apenas <a href="./login.php">faça login</a></p>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <script type="module" src="../js/functionScript.js"></script>    
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>