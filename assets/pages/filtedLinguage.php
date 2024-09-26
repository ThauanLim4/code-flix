<?php
require("../data/config.php");
$linguagemUrl = $_GET["linguage"] ?? '';
$listaDeCursosFiltrados = [];

$linguagensFiltradas = $pdo->query("SELECT * FROM cursos WHERE linguagem LIKE '%$linguagemUrl%'");

if ($linguagensFiltradas->rowCount() > 0) {
    $listaDeCursosFiltrados = $linguagensFiltradas->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="./../styles/stylePages.css?=<?php echo time(); ?>">

</head>

<body>
    <?php require("./../views/partials/header.php") ?>
    <main class="mainContainer">
        <div class="maincontent">

            <section class="sectionLinguagesSelected">
                <h2 class="titleLinguageSelected">Todos os Cursos de <span><?= $linguagemUrl; ?> </span></h2>
                <div class="areaCoursers">
                    <?php foreach ($listaDeCursosFiltrados as $ling): ?>
                        <div class="courseItem">

                            <a href="./courseInfos.php?result=<?= $ling['id'] ?>">
                                <div>
                                    <i <?= $ling['linguagemIcon'] ?>></i>
                                    <img class="courseImg" src="<?= $ling['imagem'] ?>" alt="">
                                    <span class="courseLesson">Aulas: <?= $ling['quantAulas'] ?></span>
                                </div>
                                <h3 class="courseName"><?= $ling['nome'] ?></h3>
                                <span class="courseAutor"><?= $ling['canal'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
        <?php require("./../views/partials/footer.php") ?>
    </main>
    <script src="./../js/functionScript.js"></script>
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>