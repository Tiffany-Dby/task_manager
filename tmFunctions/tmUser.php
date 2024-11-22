<?php
require_once __DIR__ . '/tmDatabase.php';

function tmGetUserByMail($email){
    $tmBase = tmConnectDb();

    try {
        $tmResult = $tmBase->prepare("SELECT user_id, username, email, password FROM users WHERE email = :email");
        $tmResult->bindParam(":email", $email);
        $tmResult->execute();

        return $tmResult->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        echo $e->getMessage();

        return false;
    }
}

function tmSignIn($email, $password): bool
{
    $tmUser = tmGetUserByMail($email);
    if (!$tmUser){
        return false;
    }

    $tmArePassSame = password_verify($password, $tmUser["password"]);
    if(!$tmArePassSame){
        return false;
    }

    $_SESSION["username"] = $tmUser["username"];
    $_SESSION["email"] = $tmUser["email"];
    $_SESSION["userId"] = $tmUser["user_id"];

    return true;
}
function tmSignOut(): void
{
    session_unset();
    session_destroy();

    header("Location: /task_manager/index.php");
    exit();
}

function tmCreateUser($username, $email, $password): false|string
{
    $tmBase = tmConnectDb();

    try {
        $tmResult = $tmBase->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $tmResult->bindParam(":username", $username);
        $tmResult->bindParam(":email", $email);
        $tmResult->bindParam(":password", $password);
        $tmResult->execute();

        return $tmBase->lastInsertId();
    } catch (PDOException $e){
        echo $e->getMessage();

        return false;
    }
}