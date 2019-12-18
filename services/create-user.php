<?php
require_once(__DIR__ . '/connect.php');

$cUsername = $_POST['username'];
$cName = $_POST['name'];
$cSurname = $_POST['surname'];
$cPassword = $_POST['password'];
$cEmail = $_POST['email'];
$cPhonenumber = $_POST['phone'];
$cAddress = $_POST['address'];
$cCity = $_POST['city'];
$cCCV = $_POST['ccv'];
$cIBAN = $_POST['iban'];
$nExpirationDate = $_POST['expire'];

$cQuery  = 'CALL createNewUser(?,?,?,?,?,?,?,?,?,?,?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([
    $cUsername,
    $cName,
    $cSurname,
    $cPassword,
    $cEmail,
    $cPhonenumber,
    $cAddress,
    $cCity,
    $cCCV,
    $cIBAN,
    $nExpirationDate
]);

if($ok) {
    header('Location: ../index.php');
} else {
    echo 'ERROR: Try new username and/or email';
}