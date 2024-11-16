<?php
session_start();
require_once __DIR__ . '/../tmFunctions/tmUser.php';

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['email']) && isset($_POST["signOut"])){
    tmSignOut();
}