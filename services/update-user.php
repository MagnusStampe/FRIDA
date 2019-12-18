<?php
require_once(__DIR__ . '/connect.php');

$nID = $_POST['id'];
$cUsername = $_POST['username'];
$cName = $_POST['name'];
$cSurname = $_POST['surname'];
$cPhonenumber = $_POST['phone'];
$cPassword = $_POST['password'];
$cEmail = $_POST['email'];
$cAddress = $_POST['address'];

$cQuery = 'UPDATE tuser
SET cUsername = :username,
cName = :name,
cSurname = :surname,
cPhonenumber = :phone,
cPassword = :password,
cEmail = :email,
cAddress = :address
WHERE nUserID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":id", $nID, PDO::PARAM_STR);
$stmt->bindValue(":username", $cUsername, PDO::PARAM_STR);
$stmt->bindValue(":name", $cName, PDO::PARAM_STR);
$stmt->bindValue(":surname", $cSurname, PDO::PARAM_STR);
$stmt->bindValue(":phone", $cPhonenumber, PDO::PARAM_STR);
$stmt->bindValue(":password", $cPassword, PDO::PARAM_STR);
$stmt->bindValue(":email", $cEmail, PDO::PARAM_STR);
$stmt->bindValue(":address", $cAddress, PDO::PARAM_STR);
$stmt->execute();

header('Location: ../admin.php#users');
