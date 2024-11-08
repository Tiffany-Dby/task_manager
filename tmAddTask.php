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
        $tmUser_id = 1;
        $tmSql = "INSERT INTO tasks (title, description, user_id) VALUES ('$tmTitle', '$tmDescription', $tmUser_id)";
        $tmBase->exec($tmSql);
        
    }
    //foreach ($tmBase->query('SELECT * FROM tasks') as $tmRow) {
    //    echo "<p>Titre : $tmRow[title]";
    //    echo "<br>Description : $tmRow[description]";
    //    echo "<br>Date de création : $tmRow[created_at]";}