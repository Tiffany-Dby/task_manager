<?php echo
session_start();
unset($_SESSION["signUpError"]);

require_once __DIR__ . "/../../tmFunctions/tmDatabase.php";
require_once __DIR__ . "/../../tmFunctions/tmUser.php";

$tmUsername = $tmEmail = $tmPassword = "";

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signUp"])){

    if(empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])){
        $_SESSION["signUpError"] = "Veuillez remplir tous les champs";

        header("Location: tmSignUp.php");
        exit();
    }

    $tmUsername = htmlspecialchars($_POST["username"]);
    $tmEmail = htmlspecialchars($_POST["email"]);
    $tmPassword = htmlspecialchars($_POST["password"]);

    $tmPasswordHash = password_hash($tmPassword, PASSWORD_BCRYPT);

    $tmNewUserId = tmCreateUser($tmUsername, $tmEmail, $tmPasswordHash);

    if(!$tmNewUserId){
        $_SESSION["signUpError"] = "Erreur: le compte n'a pas pu être créé.";
        header("Location: tmSignUp.php");
    } else {
        unset($_SESSION["signUpError"]);
        header("Location: /task_manager/tmViews/tmSignIn/tmSignIn.php");
    }

    exit();
}