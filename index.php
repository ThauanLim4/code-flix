<?php require("./assets/data/config.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/styles/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/styles/header.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="headerContainer">
        <div class="contentHeader">
            <h1 class="title"><a href="./index.php">CodeFlix</a></h1>
            <nav class="navigationMenu">
                <ul>
                    <li>
                        <a href="./index.php">início</a>
                    </li>

                    <div class="suspenseMenu">
                        <p class="btnSuspenseMenu">usuário</p>
                        <ul class="suspenseList">
                            <li>
                                <a href="./assets/pages/favoriteCoursers.php">favoritos</a>
                            </li>
                            <li>
                                <a href="./assets/pages/allLinguages.php">explorar</a>
                            </li>
                            <li>
                                <a href="./assets/pages/login.php">
                                    <?php
                                    if ($secaoIdUsuario) {
                                        echo 'logado ';
                                        echo "<i class='fa-solid fa-user'></i>";
                                    } else {
                                        echo 'login ';
                                        echo "<i class='fa-solid fa-right-to-bracket'>";
                                    } 
                                    ?>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <li>
                        <a href="assets/pages/about.html">sobre</a>
                    </li>


                </ul>
            </nav>
            <div class="menuHamburguer">
                <button class="open"><i class="bi bi-list"></i></button>
            </div>
        </div>

        <div class="menuFloat">
            <nav class="navigationMenuM">
                <ul>

                    <li>
                        <a href="./index.php">início <i class="fa-solid fa-house"></i></a>
                    </li>
                    <li>
                        <a href="./assets/pages/allLinguages.php">explorar <i class="fa-solid fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="./assets/pages/favoriteCoursers.php">favoritos <i class="fa-solid fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="./assets/pages/about.html">sobre <i class="fa-regular fa-circle-question"></i></a>
                    </li>

                    <hr>

                    <li>
                        <a href="assets/pages/login.php"> 
                            <?php
                                if ($secaoIdUsuario) {
                                    echo 'logado ';
                                    echo "<i class='fa-solid fa-user'></i>";
                                } else {
                                    echo 'login ';
                                    echo "<i class='fa-solid fa-right-to-bracket'>";
                                } 
                            ?>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
    <main class="mainContainer">
        <div class="maincontent">


            <section class="sectionIntroduction">
                <div class="areaIntroduction">
                    <div>
                        <h2 class="titleIntroductory">Bem-vindo À <span>C</span>ode<span>F</span>lix</h2>
                        <p class="descriptIntroductory">plataforma com diversos cursos de programação gratuito</p>
                    </div>
                    <div class="d2">
                        <img class="banner" src="assets/images/bannerLinguages.svg" alt="">
                    </div>
                </div>
                <section class="linguages">
                    <a class="buttonCourse html" href="assets/pages/filtedLinguage.php?linguage=html">
                        html
                    </a>

                    <a class="buttonCourse css" href="assets/pages/filtedLinguage.php?linguage=css">
                        css
                    </a>

                    <a class="buttonCourse js" href="assets/pages/filtedLinguage.php?linguage=javascript">
                        javascript
                    </a>

                    <a class="buttonCourse php" href="assets/pages/filtedLinguage.php?linguage=php">
                        php
                    </a>

                    <a class="buttonCourse nodejs" href="assets/pages/filtedLinguage.php?linguage=nodejs>">
                        nodeJs
                    </a>

                    <a class="buttonCourse java" href="assets/pages/filtedLinguage.php?linguage=java">
                        java
                    </a>

                    <a class="buttonCourse csharp" href="assets/pages/filtedLinguage.php?linguage=csharp">
                        c#
                    </a>

                    <a class="buttonCourse python" href="assets/pages/filtedLinguage.php?linguage=python">
                        python
                    </a>

                    <a class="buttonCourse" href="assets/pages/allLinguages.php">
                        ver tudo <i class="bi bi-arrow-right"></i>
                    </a>

                </section>

                <section class="sectionRecomendations">
                    <h2 class="TitleSectionRecomendations">Comece conhecendo</h2>

                    <div class="areaCoursers">
                    </div>
                </section>

            </section>

        </div>
        <footer class="contentFooter">
            <div class="areaInfo">
                <h2>Informações</h2>
                <ul>
                    <li><a href="#">Quem somos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Portifólio</a></li>
                </ul>
            </div>

            <div class="areaSocial">
                <h2>Social</h2>
                <ul>
                    <li><a href="https://api.whatsapp.com/send?phone=5583998093699" target="_blank">whatsapp <i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a target="_blank" href="www.linkedin.com/in/thauan-lima-120bb6311">linkedin <i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/thaau_lisouza?utm_source=qr&igsh=cGUyMGdnMG1scnZw">instagram <i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>

        </footer>
    </main>


    <script src="assets/js/index.js"></script>
    <script src="assets/js/functionScript.js"></script>
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>