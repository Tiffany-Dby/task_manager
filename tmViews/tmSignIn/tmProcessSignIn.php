<?php
session_start();
unset($_SESSION["signInError"]);

require_once __DIR__ . "/../../tmFunctions/tmDatabase.php";
require_once __DIR__ . "/../../tmFunctions/tmUser.php";

$tmEmail = $tmPassword = '';

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signIn"])){
    if(empty($_POST["email"]) || empty($_POST["password"])){
        $_SESSION["signInError"] = "Veuillez remplir tous les champs";

        header("Location: tmSignIn.php");
        exit();
    }

    $tmEmail = $_POST["email"];
    $tmPassword = $_POST["password"];

    $tmIsSignedIn = tmSignIn($tmEmail, $tmPassword);

    if(!$tmIsSignedIn){
        $_SESSION["signInError"] = "Email ou mot de passe incorrect";
        header("Location: tmSignIn.php");
    } else  {
        unset($_SESSION["signInError"]);
        header("Location: /task_manager/tmViews/tmDashboard/tmDashboard.php");
    }
        exit();
}