<?php
require("./../data/config.php");
$sql = $pdo->query("SELECT * FROM cursos");
$coursersList = [];

if ($sql->rowCount() > 0) {
    $coursersList = $sql;
}

$linguagemLista = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $linguagemFiltrada = $_GET['linguagem'] ?? '';
    $req = $pdo->query("SELECT * FROM cursos WHERE linguagem LIKE '%$linguagemFiltrada%'");

    if ($req->rowCount() > 0) {
        $linguagemLista = $req->fetchAll(PDO::FETCH_ASSOC);

        $coursersList = [];
    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="./../styles/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="./../styles/stylePages.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="./../styles/header.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php require("./../views/partials/header.php") ?>
    <main class="mainContainer">
        <div class="maincontent">
            <section class="sectionIntroductionLanguages">
                <div class="areaIntroductionLanguages">
                    <h2 class="titleSectionLinguages">Navegue Por <span>Linguagens</span></h2>
                    <p class="descriptSectionLinguages">encontre a linguagem que você deseja estudar e então mãos a obra</p>
                </div>
                <section class="sectionAlllinguages">
                    <form method="GET" class="areaButtons">
                        <label for="htmlCheck" class="buttonCourse html">
                            html
                            <input type="checkbox" name="linguagem" value="html" id="htmlCheck">
                        </label>

                        <label for="cssCheck" class="buttonCourse css">
                            css
                            <input type="checkbox" name="linguagem" value="css" id="cssCheck">
                        </label>

                        <label for="javascriptCheck" class="buttonCourse js">
                            javascript
                            <input type="checkbox" name="linguagem" value="javascript" id="javascriptCheck">
                        </label>

                        <label for="phpCheck" class="buttonCourse php">
                            php
                            <input type="checkbox" name="linguagem" value="php" id="phpCheck">
                        </label>

                        <label for="nodejsCheck" class="buttonCourse nodejs">
                            node.js
                            <input type="checkbox" name="linguagem" value="nodejs" id="nodejsCheck">
                        </label>

                        <label for="javaCheck" class="buttonCourse java">
                            java
                            <input type="checkbox" name="linguagem" value="java" id="javaCheck">
                        </label>

                        
                        <label for="csharpCheck" class="buttonCourse csharp">
                            c#
                            <input type="checkbox" name="linguagem" value="csharp" id="csharpcheck">
                        </label>

                        <label for="cplusCheck" class="buttonCourse cplus">
                            c++
                            <input type="checkbox" name="linguagem" value="c++" id="cplusCheck">
                        </label>

                        <label for="pythonCheck" class="buttonCourse python">
                            python
                            <input type="checkbox" name="linguagem" value="python" id="pythonCheck">
                        </label>
                        

                        <input type="submit" class="filterBtn" value="Filtrar">
                    </form>
                </section>
            </section>
            <section class="sectionCourses">
                <div class="areaCoursers">
                    <?php foreach ($coursersList as $courser): ?>
                        <div class="courseItem">

                            <a href="./courseInfos.php?result=<?=$courser['id'] ?>">
                                <div>
                                    <i <?= $courser['linguagemIcon'] ?>></i>
                                    <img class="courseImg" src="<?= $courser['imagem'] ?>" alt="">
                                    <span class="courseLesson">Aulas: <?= $courser['quantAulas'] ?></span>
                                </div>
                                <h3 class="courseName"><?= $courser['nome'] ?></h3>
                                <span class="courseAutor"><?= $courser['canal'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    <?php foreach ($linguagemLista as $filtrada): ?>
                        <div class="courseItem">

                            <a href="./courseInfos.php?result=<?=$filtrada['id'] ?>">
                                <div>
                                    <i <?= $filtrada['linguagemIcon'] ?>></i>
                                    <img class="courseImg" src="<?= $filtrada['imagem'] ?>" alt="">
                                    <span class="courseLesson">Aulas: <?= $filtrada['quantAulas'] ?></span>
                                </div>
                                <h3 class="courseName"><?= $filtrada['nome'] ?></h3>
                                <span class="courseAutor"><?= $filtrada['canal'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </section>

        </div>
    </main>

    <script src="./../js/pagesScripts.js"></script>
    <script src="./../js/functionScript.js"></script>
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>