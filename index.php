<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./tmStyles/gardevoir.css">
    <link rel="stylesheet" href="./tmStyles/index.css">
    <title>Task Manager</title>
</head>
<body>
    <?php require_once __DIR__ . "/tmHeader.php" ?>

    <main>
            <?php require_once __DIR__ . "/tmAddTask.php" ?>
            <?php require_once __DIR__ . '/tmViewTasksList.php' ?>
    </main>

    <?php require_once __DIR__ . "/tmFooter.php" ?>
</body>
</html>