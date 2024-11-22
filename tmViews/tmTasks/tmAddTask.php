<?php
require_once __DIR__ . '/../../tmFunctions/tmTask.php';

$tmTitle = "";
$tmDescription = "";
?>
    <form class="form form--task" method="POST" action="" >
        <div class="input__wrapper">
            <label class="input__label" for="tmTitle">Titre de la tâche:</label>
            <input class="input" name="tmTitle" id="tmTitle" type="text">
        </div>
        <div class="input__wrapper">
            <label class="input__label" for="tmDescription">Description de la tâche:</label>
            <input class="input" name="tmDescription" id="tmDescription" type="text">
        </div>
        <div class="form__btn">
            <button class="btn btn--accent" type="submit">Valider</button>
        </div>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tmTitle']) && isset($_POST['tmDescription']) && isset($_SESSION['userId'])) {
    $tmTitle = $_POST['tmTitle'];
    $tmDescription = $_POST['tmDescription'];

    $tmNewTaskId = tmCreateTask($tmTitle, $tmDescription, $_SESSION["userId"]);
    if(!$tmNewTaskId) {
        $_SESSION["newTaskError"] = "Une erreur est survenue à la création de la tâche";
    } else {
        unset($_SESSION['newTaskError']);
    }

    header("Location: tmTasks.php");
    exit();
}