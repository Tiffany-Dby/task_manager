<?php
require 'tmData.php';
session_start();
$tmBase = tmConnectDb();

$tmLogin = $_SESSION['login'];
$tmPassword = $_SESSION['password'];
$tmEmail = $_SESSION['email'];

$tmSql = $tmBase->query("SELECT `task_id` ,`title`, `description`, `status`, `created_at`, `completed_at` FROM `tasks` WHERE user_id= (SELECT users.user_id FROM users WHERE users.username='$tmLogin' AND users.password='$tmPassword' AND users.email='$tmEmail') ");
if($tmSql->rowCount() > 0){
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>title</th><th>description</th><th>status</th><th>created_at</th><th>completed_at</th></tr>";

    //affichage de chaque ligne
    while ($tmDonnees = $tmSql->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($tmDonnees['title']) . "</td>";
        echo "<td>" . htmlspecialchars($tmDonnees['description']) . "</td>";
        echo "<td>" . htmlspecialchars($tmDonnees['status']) . "</td>";
        echo "<td>" . htmlspecialchars($tmDonnees['created_at']) . "</td>";
        echo "<td>" . $tmDonnees['completed_at'] . "</td>";
        echo "<td><a href='tmDeletetask.php?id=" . htmlspecialchars($tmDonnees['task_id']) . "'>Supprimer</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "Il n'y a pas de tâche.";
}
