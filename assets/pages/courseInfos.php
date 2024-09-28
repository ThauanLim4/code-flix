<?php
require('../data/config.php');
$cursoIdUrl = $_GET['result'];
$cursoIdUrlConvert = (int)$cursoIdUrl;
$cursoInfosLista = [];

if ($cursoIdUrlConvert) {
    $cursoInfos = $pdo->prepare("SELECT * FROM cursos WHERE id = :id");
    $cursoInfos->bindValue(':id', $cursoIdUrlConvert);
    $cursoInfos->execute();

    if ($cursoInfos->rowCount() > 0) {
        $cursoInfosLista = $cursoInfos->fetch(PDO::FETCH_ASSOC);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="./../styles/index.css?=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="./../styles/stylePages.css?=<?php echo time(); ?>">

<body>
    <?php require("./../views/partials/header.php") ?>
    <main class="mainContainer">
        <div class="maincontent">

            <section class="sectionCourseInfos">

                <div class="areaInformationsOfCourse">

                    <div class="imageInfo">
                        <img src="<?= $cursoInfosLista['imagem'] ?>" alt="">
                    </div>

                    <div class="infos">
                        <div class="mainInfos">
                            <h2><?= $cursoInfosLista['nome'] ?></h2>
                            <h3><?= $cursoInfosLista['canal'] ?></h3>
                        </div>
                        <div class="infosDescription">
                            <p>Quantidade de Aulas: <?= $cursoInfosLista['quantAulas'] ?></p>
                            <p>Data: <?= $cursoInfosLista['data'] ?></p>
                            <p>Linguagem: <?= $cursoInfosLista['linguagem'] ?></p>
                        </div>

                    </div>

                    <div class="infosAreaButtons">
                        <button class="goToCourse">
                            <a target="_blank" href="<?= $cursoInfosLista['link'] ?>">ir para o curso</a>
                        </button>


                        <a type="submit" class="addToFavorites" href="./../models/addFavoriteCourse.php?result=<?= $cursoInfosLista['id'] ?>">
                            <?php 
                            // if($cursoIdUrlConvert){

                            //     $btnfavorited = $pdo->prepare("SELECT * FROM cursosfavoritados WHERE idDoUsuario = :idDoUsuario");
                            //     $btnfavorited->bindValue(':idDoUsuario', $_SESSION['idUsuario']);
                            //     $btnfavorited->execute();

                            //     // $btnfavorited = $pdo->prepare("SELECT * FROM cursosfavoritados WHERE id = :id");
                            //     // $btnfavorited->bindValue(':id', $cursoIdUrlConvert);
                            //     // $btnfavorited->execute();
                            
                            //     if () {
                            //         echo "<i class='fa-solid fa-heart'></i>";
                            //     } else {
                            //         echo "<i class='fa-regular fa-heart'></i>";
                            //     }
                            // }

                            if($cursoIdUrlConvert){

                                $a = [];

                                $btnfavorited = $pdo->prepare("SELECT * FROM cursosfavoritados WHERE idDoUsuario = :idDoUsuario");
                                $btnfavorited->bindValue(':idDoUsuario', $_SESSION['idUsuario']);
                                $btnfavorited->execute();

                                // $btnfavorited = $pdo->prepare("SELECT * FROM cursosfavoritados WHERE id = :id");
                                // $btnfavorited->bindValue(':id', $cursoIdUrlConvert);
                                // $btnfavorited->execute();
                                
                                $a = $btnfavorited->fetchAll(PDO::FETCH_ASSOC);


                            
                                if ($cursoIdUrlConvert === $a[0]['id']) {
                                    echo "<i class='fa-solid fa-heart'></i>";
                                } else {
                                    echo "<i class='fa-regular fa-heart'></i>";
                                }
                            }

                            
                            ?>
                        </a>


                        <p class="msgAddFavorites">

                        <?php var_dump($a); ?>
                        </p>
                    </div>

                </div>

                <div class="areaSeeMore">
                    <h2>Veja Também:</h2>
                    <div class="areaSeeMoreItens">
                        <?php
                        $sql = $pdo->query("SELECT * FROM cursos");
                        $coursersList = [];

                        if ($sql->rowCount() > 0) {
                            $coursersList = $sql;
                        }
                        ?>

                        <?php foreach ($coursersList as $courser): ?>
                            <div class="courseItem">

                                <a href="./courseInfos.php?result=<?= $courser['id'] ?>">
                                    <div class="divImg">
                                        <img class="courseImg" src="<?= $courser['imagem'] ?>" alt="">
                                    </div>
                                    <h3 class="courseName"><?= $courser['nome'] ?></h3>
                                    <span class="courseAutor"><?= $courser['canal'] ?></span>
                                </a>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </section>
        </div>
    </main>

    <script>
        let btnAddToFavorites = document.querySelector('.addToFavorites');
        let msgAddFavorites = document.querySelector('.msgAddFavorites');
        btnAddToFavorites.addEventListener('click', () => {
            console.log('adicionado aos favoritos');
            btnAddToFavorites.querySelector('i').classList.toggle('fa-solid');
            msgAddFavorites.textContent = 'Adicionado aos favoritos!';

            setTimeout(() => {
                msgAddFavorites.textContent = '';

            }, 3000)
        })
    </script>
    <script src="./../js/functionScript.js"></script>
    <script src="https://kit.fontawesome.com/56d6c8a3a3.js" crossorigin="anonymous"></script>
</body>

</html>