<?php
function tmConnectDb()
{
    $tmHost = 'localhost';
    $tmUser = 'root';
    $tmPassword = '';
    $tmName = 'task_manager';

    try {
        $tmBase = new PDO("mysql:host=$tmHost;dbname=$tmName", "$tmUser", "$tmPassword");
        $tmBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $tmBase;
    }
    catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
        return false;
    }
}
?>