<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: tmDeltasks/tmShowtasks.php');
    exit;
}
?>
<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/tmStyles/gardevoir.css">
    <link rel="stylesheet" href="/tmStyles/index.css">
    <title>Task Manager</title>
</head>
<body>
<?php require_once __DIR__ . "/tmHeader.php" ?>

<main>
    <form method="post" action="">
        <label>
            email : <input type="text" name="email"/> <br/>
            login :  <input type="text" name="login"/> <br/>
            password : <input type="text" name="password"/> <br/>
        </label>
        <input type="submit" value="Entrer" name="buttonEnter" />
    </form>

</main>

<?php require_once __DIR__ . "/tmFooter.php" ?>
</body>
</html>