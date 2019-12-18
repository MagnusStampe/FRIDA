<?php

require_once(__DIR__ . '/connect.php');

$name = $_POST['txtName'];
$value = $_POST['txtValue'];

$UserID = 1;
$ConvID = 1;

$cQuery = 'UPDATE tfridge, tconversion 
           SET tconversion.cName = :name, 
           tfridge.nValue = :value 
           WHERE tfridge.nUserID = :id 
           AND tconversion.nConvID = :cId';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":value", $value, PDO::PARAM_STR);
$stmt->bindValue(":id", $UserID, PDO::PARAM_STR);
$stmt->bindValue(":cId", $ConvID, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../profil.php');


