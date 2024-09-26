<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/stylePages.css">
</head>

<body>
    <header class="headerContainer">
        <div class="contentHeader">
            <h1 class="title"><a href="index.html">CodeFlix</a></h1>
            <nav class="navigationMenu">
                <ul>
                    <li>
                        <a href="index.html">início</a>
                    </li>

                    <div class="suspenseMenu">
                        <p class="btnSuspenseMenu">usuário</p>
                        <ul class="suspenseList">
                            <li>
                                <a href="assets/pages/favoriteCoursers.html">favoritos</a>
                            </li>
                            <li>
                                <a href="assets/pages/allLinguages.php">explorar</a>
                            </li>
                            <li>
                                <a href="assets/pages/login.php">
                                    <?php session_start();
                                    if ($_SESSION['loginEmail']) {
                                        echo 'logado';
                                    } else {
                                        echo 'login';
                                    } ?><i class="fa-solid fa-user"></i>
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
                        <a href="#">início <i class="fa-solid fa-house"></i></a>
                    </li>
                    <li>
                        <a href="assets/pages/allLinguages.php">explorar <i class="fa-solid fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="assets/pages/favoriteCoursers.php">favoritos <i class="fa-solid fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="assets/pages/about.html">sobre <i class="fa-regular fa-circle-question"></i></a>
                    </li>

                    <hr>

                    <li>
                        <a href="assets/pages/login.php">login <i class="fa-solid fa-right-to-bracket"></i></a>
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
                    <button class="buttonCourse html" value="html">
                        <a href="assets/pages/filtedLinguage.php?linguage=html">
                            html
                        </a>
                    </button>
                    <button class="buttonCourse css">
                        <a href="assets/pages/filtedLinguage.php?linguage=css">
                            css
                        </a>
                    </button>
                    <button class="buttonCourse js">
                        <a href="assets/pages/filtedLinguage.php?linguage=javascript">
                            javascript
                        </a>
                    </button>
                    <button class="buttonCourse php">
                        <a href="assets/pages/filtedLinguage.php?linguage=php">
                            php
                        </a>
                    </button>
                    <button class="buttonCourse nodejs">
                        <a href="assets/pages/filtedLinguage.php?linguage=nodejs>">
                            nodeJs
                        </a>
                    </button>
                    <button class="buttonCourse java">
                        <a href="assets/pages/filtedLinguage.php?linguage=java">
                            java
                        </a>
                    </button>

                    <button class="buttonCourse csharp">
                        <a href="assets/pages/filtedLinguage.php?linguage=csharp">
                            c#
                        </a>
                    </button>

                    <button class="buttonCourse python">
                        <a href="assets/pages/filtedLinguage.php?linguage=python">
                            python
                        </a>
                    </button>

                    <button class="buttonCourse">
                        <a href="assets/pages/allLinguages.php">
                            ver tudo <i class="bi bi-arrow-right"></i>
                        </a>
                    </button>
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
                    <li><a href="">Quem somos</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Portifólio</a></li>
                </ul>
            </div>

            <div class="areaSocial">
                <h2>Social</h2>
                <ul>
                    <li><a href="">whatsapp <i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="">linkedin <i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="">instagram <i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>

        </footer>
    </main>


    <script src="assets/js/index.js"></script>
    <script src="assets/js/functionScript.js"></script>
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>