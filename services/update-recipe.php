<?php

require_once(__DIR__ . '/connect.php');

$nRecipeID = 1;


$name = $_POST['txtName'];
$description = $_POST['txtDescription'];


$cQuery = 'UPDATE trecipe SET 
cName = :name, 
cDescription = :description 
WHERE nRecipeID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":description", $description, PDO::PARAM_STR);
$stmt->bindValue(":id", $nRecipeID, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../recipes.php');
