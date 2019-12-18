<?php

require_once(__DIR__ . '/connect.php');

$nRecipeID = $_GET['reID'];
$name = $_GET['txtName'];
$description = $_GET['txtDescription'];

$cQuery = 'UPDATE trecipe SET 
cName = :name, 
cDescription = :description 
WHERE nRecipeID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":description", $description, PDO::PARAM_STR);
$stmt->bindValue(":id", $nRecipeID, PDO::PARAM_STR);
$stmt->execute();

if(isset($_GET['admin'])) {
    header('Location: ../admin.php#recipes');
    exit;
}
header('Location: ../recipes.php');
