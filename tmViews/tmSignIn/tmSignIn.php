<?php session_start(); ?>
<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../tmStyles/gardevoir.css">
    <link rel="stylesheet" href="../../tmStyles/index.css">
    <title>Task Manager - Se connecter</title>
</head>
<body>
    <?php require_once __DIR__ . "/../../tmHeader.php" ?>
    <main>
        <section>
            <div class="tmContainer">
                <h1>Se connecter</h1>

                <?php if(isset($_SESSION["signInError"])): ?>
                    <p class="tmError"> <?php echo $_SESSION["signInError"] ?></p>
                <?php endif; ?>

                <form action="tmProcessSignIn.php" method="POST">
                    <div class="tmInputWrapper">
                        <label class="tmInputLabel"  for="email">Email</label>
                        <input class="tmInput" type="email" id="email" name="email">
                    </div>
                    <div class="tmInputWrapper">
                        <label class="tmInputLabel" for="password">Mot de passe</label>
                        <input class="tmInput" type="password" id="password" name="password">
                    </div>
                    <div class="tmBtnWrapper">
                        <input class="tmBtn" type="submit" name="signIn" value="Connexion">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . "/../../tmFooter.php" ?>
</body>
</html>
