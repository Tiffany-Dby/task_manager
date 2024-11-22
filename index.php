<?php session_start() ?>
<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./tmAssets/tmStyles/gardevoir.css">
    <link rel="stylesheet" href="./tmAssets/tmStyles/index.css">
    <title>Task Manager - Accueil</title>
</head>
<body>
    <?php require_once __DIR__ . "/tmHeader.php" ?>
    <main>
        <section>
            <div class="presentation__container container">
                <div class="presentation__text">
                    <h1>Gérer vos tâches n'a jamais été aussi facile</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi architecto atque culpa eligendi enim esse eveniet, fuga fugit hic illum laborum modi necessitatibus nesciunt nobis perspiciatis provident quaerat quasi quis quos sit tempore, tenetur totam ullam voluptate voluptatem voluptatum! Aliquid dolorem illo inventore, ipsam nesciunt quidem rem similique?</p>
                    <div class="btn__wrapper">
                        <a href="/task_manager/tmViews/tmSignIn/tmSignIn.php" class="btn btn--primary">Commencer</a>
                    </div>
                </div>
                <div class="presentation__img">
                    <img class="img" src="./tmAssets/tmImages/tmPresentation.webp" alt="Dessin fantaisie d'une liste de choses à faire, à côté d'une fille avec un carnet et un crayon sur une chaise haute">
                </div>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . "/tmFooter.php" ?>
</body>
</html>