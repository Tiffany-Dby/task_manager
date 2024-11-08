<?php

require_once ('tmDatabase.php');
require_once ('tmHeader.php');

try {

        $tmUserId = 3;

        if (isset($_POST['delete']) && $_POST['delete'] == 'yes'    ) {
            // Requête SQL pour supprimer l'utilisateur
            $tmSql = "DELETE FROM tasks WHERE task_id = :task_id";
            $tmReq = $tmBase->prepare($tmSql);
            $tmReq->bindParam(':task_id', $tmUserId, PDO::PARAM_INT);

            $tmReq->execute();

            echo "Task successfully deleted<br>";
        } elseif (isset($_POST['delete']) && $_POST['delete'] == 'no') {
            echo "Task deleted.<br>";
        } else {
            echo "Do you really want to delete this task ?<br>";

            $tmSql = "SELECT * FROM tasks WHERE task_id = :task_id";
            $tmReq = $tmBase->prepare($tmSql);
            $tmReq->bindParam(':task_id', $tmUserId, PDO::PARAM_INT);
            $tmReq->execute();

            $tmUsers = $tmReq->fetch(PDO::FETCH_ASSOC);

            if ($tmUsers) {
                echo "Task ID : " . ($tmUsers['task_id']) . "<br>";
                echo "User ID : " . ($tmUsers['user_id']) . "<br>";
                echo "Title : " . ($tmUsers['title']) . "<br>";
                echo "Description : " . ($tmUsers['description']) . "<br>";
                echo "Status : " . ($tmUsers['status']) . "<br>";
                echo "Created at : " . ($tmUsers['created_at']) . "<br>";
                echo "Completed at : " . ($tmUsers['completed_at']) . "<br>";

                ?>
                <form method="POST">
                    <p>Do you really want to delete this task ?</p>
                        <label for="tmTitle">Titre de la tâche:</label>
                        <input name="tmTitle" id="tmTitle" type="text">
                        <br>   </br>
                        <label for="tmDescription">Description de la tâche:</label>
                        <input name="tmDescription" id="tmDescription" type="text">
                        <br>   </br>
                        <input type="submit" value="Valider">
$                    <input type="submit" name="delete" value="yes"> Yes
                    <input type="submit" name="delete" value="no"> No
                </form>
                <?php
            } else {
                echo "No task found.";
            }
        }


    } catch (Exception $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>