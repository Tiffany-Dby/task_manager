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
    <title>Task Manager - Mes Tâches</title>
</head>
<body>
<?php require_once __DIR__ . "/../../tmHeader.php" ?>
<main>
    <section>
        <div class="container">
            <h1>Mes tâches</h1>
        </div>
        <div class="container">
            <div class="form__container">
                <h2>Ajouter une tâche</h2>
                <?php if(isset($_SESSION["newTaskError"])): ?>
                    <p class="error"> <?php echo $_SESSION["newTaskError"] ?></p>
                <?php endif; ?>
                <?php require_once __DIR__ . '/tmAddTask.php' ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Liste des tâches</h2>
            <?php if(isset($_SESSION["deleteTaskError"])): ?>
                <p class="error"> <?php echo $_SESSION["deleteTaskError"] ?></p>
            <?php endif; ?>
            <?php if(isset($_SESSION["markCompletedError"])): ?>
                <p class="error"> <?php echo $_SESSION["markCompletedError"] ?></p>
            <?php endif; ?>
            <div class="task__table__container">
                <?php require_once __DIR__ . '/tmViewTasksList.php' ?>
            </div>
        </div>
    </section>
    <dialog id="deleteDialog">
        <div class="form__container">
            <form class="form" action="tmDeleteTask.php" method="POST">
                <h3>Suppression</h3>
                <input type="hidden" name="deleteTaskId" id="deleteTaskId">
                <p>Voulez-vous supprimer la tâche : <span id="taskTitle"></span> ?</p>
                <div class="form__btns">
                    <div class="btn__wrapper">
                        <button class="btn btn--tertiary--outline" type="button" id="cancelDeleteTask" >Annuler</button>
                    </div>
                    <div class="btn__wrapper">
                        <button class="btn btn--danger" type="submit" id="confirmDeleteTask" name="deleteTask">Confirmer</button>
                    </div>
                </div>
            </form>
        </div>
    </dialog>
</main>
<?php require_once __DIR__ . "/../../tmFooter.php" ?>
<script src="../../tmScripts/tmScript.js"></script>
</body>
</html>