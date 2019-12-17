<?php

require_once(__DIR__ . '/services/connect.php');

if ($_POST) {

    $cQuery = 'SELECT * FROM tuser';
    $stmt = $pdo->prepare($cQuery);
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach ($users as $user) {
        if ($user->cUsername == $_POST['username'] && $user->cPassword == $_POST['password']) {
            header('Location: profil.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>FRIDA - Database project</title>
</head>

<body>

    <section>
        <a href="index.php">Login</a>
        <a href="profil.php">Profil</a>
        <a href="recipes.php">Recipes</a>
    </section>
    <form action="" method="post">
        <input type="text" name="username" id="" placeholder="Username" value="Brogen21">
        <input type="password" name="password" id="" placeholder="Password" value="VeryWeak">
        <button type="submit">Login</button>
    </form>

</body>

</html>