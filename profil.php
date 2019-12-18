<?php

session_start();

require_once(__DIR__ . '/services/connect.php');

$UserID = $_SESSION['userID'];

$cQuery = 'SELECT * FROM tuser, tCitycode WHERE tuser.nUserID = :id AND tuser.nCityID = tCitycode.nCityID';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID]);
$user = $stmt->fetch();
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
        <a href="search-recipes.php">Search recipes</a>
        <a href="admin.php">Admin</a>
    </section>
    <section>
        <?php require_once(__DIR__ . '/services/get-user-info.php'); ?>
    </section>
    <section>
        <?php require_once(__DIR__ . '/services/get-creditcard.php'); ?>
    </section>
    <section>
        <?php require_once(__DIR__ . '/services/get-users-fridge.php'); ?>
    </section>
    <form action="services/delete-user.php" method="POST">
    <input type="submit" value="Delete">
</form>
</body>

</html>