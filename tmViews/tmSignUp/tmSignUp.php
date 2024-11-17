<?php session_start(); ?>
<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../tmStyles/gardevoir.css">
    <link rel="stylesheet" href="../../tmStyles/index.css">
    <title>Task Manager - S'inscrire</title>
</head>
<body>
    <?php require_once __DIR__ . "/../../tmHeader.php" ?>
    <main>
        <section>
            <div class="container">
                <div class="form__container">
                    <h1>Créer un compte</h1>

                    <?php if(isset($_SESSION["signUpError"])): ?>
                        <p class="error"> <?php echo $_SESSION["signUpError"] ?></p>
                    <?php endif; ?>

                    <form class="form" action="tmProcessSignUp.php" method="POST">
                        <div class="input__wrapper">
                            <label class="input__label" for="username">Nom d'utilisateur</label>
                            <input class="input" type="text" id="username" name="username">
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label"  for="email">Email</label>
                            <input class="input" type="email" id="email" name="email">
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label" for="password">Mot de passe</label>
                            <input class="input" type="password" id="password" name="password">
                        </div>
                        <div class="form__btn">
                            <input class="btn btn--primary" type="submit" name="signUp" value="Créer">
                        </div>
                    </form>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . "/../../tmFooter.php" ?>
</body>
</html>