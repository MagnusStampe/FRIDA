<?php
require_once(__DIR__ . '/connect.php');

$nID = $_GET['nID'];
$cName = $_GET['txtName'];
$cUnit = $_GET['txtUnit'];


$cQuery = 'UPDATE tconversion
SET cName = :name,
cUnit = :unit
WHERE nConvID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":id", $nID, PDO::PARAM_STR);
$stmt->bindValue(":name", $cName, PDO::PARAM_STR);
$stmt->bindValue(":unit", $cUnit, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../admin.php#conversions');
