<?php

require_once('tmDatabase.php');

try {
    // Récupérer l'ID de la tâche depuis l'URL
    $taskId = 5;

    if ($taskId) {
        // Mettre à jour le statut de la tâche et ajouter la date de complétion
        $tmSql = "UPDATE tasks SET status = 'completed', completed_at = CURRENT_TIMESTAMP WHERE task_id = :task_id";
        $tmReq = $tmBase->prepare($tmSql);
        $tmReq->bindParam(':task_id', $taskId, PDO::PARAM_INT);
        $tmReq->execute();

        echo "Task marked as completed.";

    } else {
        echo "Task ID is missing.";
    }

} catch (Exception $e) {
    die('Failed to update task: ' . $e->getMessage());
}

?>
