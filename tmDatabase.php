<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'task_manager';

try {
    $base = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_password");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}