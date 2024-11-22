<?php
function tmConnectDb() {
$tm_db_host = 'localhost';
$tm_db_user = 'root';
$tm_db_password = 'root';
$tm_db_name = 'task_manager';

    try {
        $tmBase = new PDO("mysql:host=$tm_db_host;dbname=$tm_db_name", "$tm_db_user", "$tm_db_password");
        $tmBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $tmBase;
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
}
