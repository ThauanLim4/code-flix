<?php 
    require('./../data/config.php');
    $infosCursosFavoritados= [];
    $idDoUsuario = $_SESSION['idUsuario'];
    $msgAlerta = '';
    $cursosFavoritados = $pdo->prepare("SELECT * FROM cursosfavoritados WHERE idDoUsuario = :idDoUsuario");
    $cursosFavoritados->bindValue(':idDoUsuario', $idDoUsuario);
    $cursosFavoritados->execute();

    if ($cursosFavoritados->rowCount() > 0) {
        $infosCursosFavoritados = $cursosFavoritados->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $msgAlerta = 'Nenhum curso foi adicionado aos favoritos';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="./../styles/header.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php require("./../views/partials/header.php") ?>
    <main class="mainContainer">
        <div class="maincontent">


            <section class="sectionFavorited">
                <span class=""><?= $msgAlerta ?></span>
                <h2 class="TitleSectionFavorited">Cursos Favoritados</h2>

                    <div class="areaCoursersFavorited">
                        <?php foreach($infosCursosFavoritados as $infos) : ?>
                        <div class="courseItem">
                            <a href="./courseInfos.php?result=<?=$infos['id']?>">
                                <div>
                                    <img class="courseImg" src="<?= $infos['imagem']?>" alt="">
                                    <span class="courseLesson">Aulas: <?= $infos['quantAulas']?></span>
                                </div>
                                <h3 class="courseName"><?= $infos['nome']?></h3>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>

            </section>

        </div>
    </main>


    <script type="module" src="../js/functionScript.js"></script>
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>