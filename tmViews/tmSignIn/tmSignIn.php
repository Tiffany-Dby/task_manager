<?php session_start(); ?>
<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../tmAssets/tmStyles/gardevoir.css">
    <link rel="stylesheet" href="../../tmAssets/tmStyles/index.css">
    <title>Task Manager - Se connecter</title>
</head>
<body>
    <?php require_once __DIR__ . "/../../tmHeader.php" ?>
    <main>
        <section>
            <div class="container">
                <div class="form__container">
                    <h1>Se connecter</h1>

                    <?php if(isset($_SESSION["signInError"])): ?>
                        <p class="error"> <?php echo $_SESSION["signInError"] ?></p>
                    <?php endif; ?>

                    <form class="form" action="tmProcessSignIn.php" method="POST">
                        <div class="input__wrapper">
                            <label class="input__label"  for="email">Email</label>
                            <input class="input" type="email" id="email" name="email">
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label" for="password">Mot de passe</label>
                            <input class="input" type="password" id="password" name="password">
                        </div>
                        <div class="form__btn">
                            <input class="btn btn--primary" type="submit" name="signIn" value="Connexion">
                        </div>
                    </form>
                    <p>Pas de compte? <a href="/task_manager/tmViews/tmSignUp/tmSignUp.php">Inscription</a></p>
                </div>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . "/../../tmFooter.php" ?>
</body>
</html>
