<?php
require_once(__DIR__ . '/connect.php');

$nID = $_GET['nID'];
$cName = $_GET['txtName'];


$cQuery = 'UPDATE ttype
SET cName = :name
WHERE nTypeID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":id", $nID, PDO::PARAM_STR);
$stmt->bindValue(":name", $cName, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../admin.php#types');
