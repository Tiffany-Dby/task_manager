<?php
require_once __DIR__ . '/../../tmFunctions/tmTask.php';

$tmTasks = [];

if (isset($_SESSION["userId"])) {
    $tmTasks = tmGetUserTasks($_SESSION["userId"]);
}

if ($tmTasks) {
    echo "<table class='task__table'>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Créé le</th>
                    <th>Complété le</th>
                    <th>Actions</th>
                </tr>
            </thead>";

    echo "<tbody>";
    foreach ($tmTasks as $tmTask) {
        echo "<tr>
                      <td>" . htmlspecialchars($tmTask['title']) . "</td>
                      <td>" . htmlspecialchars($tmTask['description']) . "</td>
                      <td>" . htmlspecialchars($tmTask['status']) . "</td>         
                      <td>" . htmlspecialchars($tmTask['created_at']) . "</td>
                      <td>" . $tmTask['completed_at'] . "</td>     
                      <td>
                          <a class='btn btn--danger--outline delete-link' href='#' data-task-id=". $tmTask['task_id'] ." data-task-title=". $tmTask['title'] .">Delete</a>  
                          <a class='btn btn--success' href='tmMarkTaskCompleted.php?taskId=" . $tmTask['task_id'] . "'>Edit</a>
                      </td>
                  </tr>";
    }
    echo "</tbody>
            </table>";
} else {
    echo "<p>Vous n'avez aucune tâche.</p>";
}