<?php

require_once(__DIR__ . '/connect.php');

$name = $_POST['txtName'];
$surname = $_POST['txtSurname'];
$email = $_POST['txtEmail'];
$address = $_POST['txtAddress'];
$city = $_POST['txtCity'];
$phone = $_POST['txtPhone'];
$joinDate = $_POST['txtJoinDate'];
if (isset($_POST['txtCancelDate'])) {
    $cancelDate = $_POST['txtCancelDate'];
}
$totalAmount = $_POST['txtTotalAmount'];
$UserID = 1;

$cQuery = 'UPDATE tuser, tCitycode SET 
cName = :name, 
cSurname = :surname, 
cEmail = :email, 
cAddress = :address, 
cCityName = :city, 
cPhonenumber = :phone, 
dJoinDate= :joinDate, 
dCancelDate= :cancelDate, 
nTotalAmount = :totalAmount 
WHERE tuser.nUserID = :id 
AND tuser.nCityID = tCitycode.nCityID';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":surname", $surname, PDO::PARAM_STR);
$stmt->bindValue(":email", $email, PDO::PARAM_STR);
$stmt->bindValue(":address", $address, PDO::PARAM_STR);
$stmt->bindValue(":city", $city, PDO::PARAM_STR);
$stmt->bindValue(":phone", $phone, PDO::PARAM_STR);
$stmt->bindValue(":joinDate", $joinDate, PDO::PARAM_STR);
$stmt->bindValue(":cancelDate", $cancelDate, PDO::PARAM_STR);
$stmt->bindValue(":totalAmount", $totalAmount, PDO::PARAM_STR);
$stmt->bindValue(":id", $UserID, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../profil.php');
