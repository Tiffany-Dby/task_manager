<?php
require_once __DIR__ . '/tmDatabase.php';

function tmCreateTask($title, $description, $userId): false|string
{
    try {
        $tmBase = tmConnectDb();

        $tmResult = $tmBase->prepare("INSERT INTO tasks (title, description, user_id) VALUES (:title, :description, :userId)");
        $tmResult->bindParam(":title", $title);
        $tmResult->bindParam(":description", $description);
        $tmResult->bindParam(":userId", $userId);
        $tmResult->execute();

        return $tmBase->lastInsertId();
    } catch (PDOException $e) {
        echo $e->getMessage();

        return false;
    }
}

function tmGetUserTasks($userId): false|array
{
    try {
        $tmBase = tmConnectDb();

        $tmResult = $tmBase->prepare("SELECT user_id, task_id, title, description, status, created_at, completed_at FROM tasks WHERE user_id = :userId");
        $tmResult->bindParam(":userId", $userId);
        $tmResult->execute();

        return $tmResult->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();

        return false;
    }
}

function tmUpdateTaskAsCompleted($userId, $taskId): bool
{
    try {
        $tmBase = tmConnectDb();

        $tmResult = $tmBase->prepare("UPDATE tasks SET status = 'completed', completed_at = CURRENT_TIMESTAMP WHERE task_id = :taskId AND user_id = :userId");
        $tmResult->bindParam(":taskId", $taskId);
        $tmResult->bindParam(":userId", $userId);

        return $tmResult->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();

        return false;
    }
}

function tmDeleteTask($userId, $taskId): bool
{
    try {
        $tmBase = tmConnectDb();

        $tmResult = $tmBase->prepare("DELETE FROM tasks WHERE task_id = :taskId AND user_id = :userId");
        $tmResult->bindParam(":taskId", $taskId, PDO::PARAM_INT);
        $tmResult->bindParam(":userId", $userId);

        return $tmResult->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();

        return false;
    }
}