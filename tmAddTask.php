<?php require_once('tmDatabase.php'); 

    $tmTitle = "";
    $tmDescription = "";
?>

    <form method="post" action="">
    <label for="tmTitle">Titre de la tâche:</label>
    <input name="tmTitle" id="tmTitle" type="text">
    <br>   </br>
    <label for="tmDescription">Description de la tâche:</label>
    <input name="tmDescription" id="tmDescription" type="text">
    <br>   </br>
    <input type="submit" value="Valider">
</form>
<?php
    if (isset($_POST['tmTitle']) && isset($_POST['tmDescription'])) {
        $tmTitle = $_POST['tmTitle'];
        $tmDescription = $_POST['tmDescription'];
        $user_id = 1;
        $tmSql = "INSERT INTO tasks (title, description, user_id) VALUES ('$tmTitle', '$tmDescription', $user_id)";
        $base->exec($sql);
        
    }
