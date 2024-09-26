<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faça login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="./../styles/login.css">
</head>

<body>
    <main class="mainContainer">
        <div class="maincontent">

            <section class="sectionLogin">
                <div class="imgLogin">
                    <img src="./../images/bannerLogin.svg" alt="">
                </div>
                <div class="areaLogin">
                    <h2>Faça seu <span>login </span></h2>
                    <form action="./../models/verifyLogin.php" method="post">

                        <div class="fieldInput">
                            <p>email</p>
                            <input type="email" name="loginEmail" id="" class="field">
                            <span class="bar"></span>
                        </div>

                        <div class="fieldInput">
                            <p>senha</p>
                            <input type="password" name="loginPass" id="" class="field">
                            <span class="bar"></span>
                        </div>

                        <input type="submit" class="btnLogin" value="Fazer login">
                    </form>

                    <hr>

                    <div class="areaCreateAccount">
                        <p>não possui uma conta? Então <a href="./createAccount.php">crie uma</a></p>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <script type="module" src="../js/functionScript.js"></script>    
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>