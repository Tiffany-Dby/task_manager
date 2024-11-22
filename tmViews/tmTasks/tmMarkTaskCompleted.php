<?php
session_start();
require_once __DIR__ . '/../../tmFunctions/tmTask.php';

if(isset($_SESSION['userId']) && isset($_GET["taskId"])){
    $tmTaskId = $_GET["taskId"];

    $tmIsMarkedCompleted = tmUpdateTaskAsCompleted($_SESSION['userId'], $tmTaskId);

    if(!$tmIsMarkedCompleted){
        $_SESSION['markCompletedError'] = "Erreur: la tâche n'a pas pu être mise à jour";
    } else {
        unset($_SESSION['markCompletedError']);
    }
} else if(!isset($_SESSION['userId'])) {
    $_SESSION['markCompletedError'] = "Erreur: votre identifiant est manquant, veuillez vous connecter";
} else if(!isset($_GET["taskId"])){
    $_SESSION['markCompletedError'] = "Erreur: identifiant de la tâche est manquant, veuillez vous réessayer";
} else {
    $_SESSION['markCompletedError'] = "Erreur: une erreur est survenue";
}

header("Location: tmTasks.php");
exit();