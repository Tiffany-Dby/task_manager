<?php session_start() ?>
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
    <title>Task Manager - Mon compte</title>
</head>
<body>
    <?php require_once __DIR__ . "/../../tmHeader.php" ?>
    <main>
        <section>
            <div class="container">
                <h1>Mon compte</h1>
                <p>Bonjour <?php if(isset($_SESSION["username"])) echo $_SESSION["username"] ?></p>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . "/../../tmFooter.php" ?>
</body>
</html>