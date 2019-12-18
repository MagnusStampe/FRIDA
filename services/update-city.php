<?php
require_once(__DIR__ . '/connect.php');

$nRecipeID = 1;


$nID = $_GET['nID'];
$cName = $_GET['txtName'];


$cQuery = 'UPDATE tcitycode
SET cCityName = :name
WHERE nCityID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":id", $nID, PDO::PARAM_STR);
$stmt->bindValue(":name", $cName, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../admin.php#cities');
