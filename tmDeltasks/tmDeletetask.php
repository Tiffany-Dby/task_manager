<?php
session_start();
require 'tmData.php';
$tmTaskId=$_GET['id'];

$tmBase = tmConnectDb();

if($tmSql = $tmBase->query("DELETE FROM `tasks` WHERE task_id = '$tmTaskId' ")) {
    echo "La tâche a bien été supprimé <br/>";
    echo "<a href='tmShowtasks.php'>Retour</a>";
}