<?php

require_once ('tmDatabase.php');
require_once ('tmHeader.php');

try {

    // Récupérer l'ID de l'utilisateur depuis l'URL
    //$tmUserId = isset($_GET['user_id']) ? (int) $_GET['user_id'] : null;
    $tmUserId = 1;

    // Si un user_id est spécifié, on filtre les tâches par cet ID, sinon on affiche toutes les tâches
    if ($tmUserId) {
        $tmSql = "SELECT * FROM tasks WHERE user_id = :user_id";
        $tmReq = $tmBase->prepare($tmSql);
        $tmReq->bindParam(':user_id', $tmUserId, PDO::PARAM_INT);
    } else {
        // Pas de filtrage, toutes les tâches
        $tmSql = "SELECT * FROM tasks";
        $tmReq = $tmBase->prepare($tmSql);
    }

    $tmReq->execute();
    $tmUsers = $tmReq->fetchAll(PDO::FETCH_ASSOC);

    if ($tmUsers) {
        echo "<h2>Task list</h2>";
        echo "<table border='5'>
            <tr>
                <th>Task ID</th>
                <th>User ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Completed at</th>
                <th>Actions</th>
            </tr>";

        foreach ($tmUsers as $tmUser) {
            echo "<tr>
                <td>" . htmlspecialchars($tmUser['task_id']) . "</td>
                <td>" . htmlspecialchars($tmUser['user_id']) . "</td>
                <td>" . htmlspecialchars($tmUser['title']) . "</td>
                <td>" . htmlspecialchars($tmUser['description']) . "</td>
                <td>" . htmlspecialchars($tmUser['status']) . "</td>         
                <td>" . htmlspecialchars($tmUser['created_at']) . "</td>
                <td>" . $tmUser['completed_at'] . "</td>     
                <td>
                    <a href='tmDeleteTask.php?id=" . $tmUser['task_id'] . "'>Delete</a> |
                    <a href='tmMarkTaskCompleted.php?id=" . $tmUser['task_id'] . "'>Edit</a> |

                </td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "No user found.";
    }

} catch (Exception $e) {
    die('Connection failed: ' . $e->getMessage());
}

require_once ('tmFooter.php');

?>