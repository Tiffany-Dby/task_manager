<?php
session_start();
require_once __DIR__ . '/../../tmFunctions/tmTask.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteTask"]) && isset($_SESSION["userId"])) {
    $tmTaskId = $_POST["deleteTaskId"];
    $tmIsDeleted = tmDeleteTask($_SESSION['userId'], $tmTaskId);

    if(!$tmIsDeleted) {
        $_SESSION["deleteTaskError"] = "Erreur: la tâche n'a pas pu être supprimé";
    } else {
        unset($_SESSION["deleteTaskError"]);
    }

    header("Location: tmTasks.php");
    exit();
}