<?php

session_start();

require_once(__DIR__ . '/connect.php');

$cName = $_POST['txtName'];
$cUnit = $_POST['txtUnit'];
$cTypeID = $_POST['txtType'];
$UserID = $_SESSION['userID'];
$cCity = $_POST['txtAmount'];

$cQuery  = 'CALL insertNewConversionItemAndType(?,?,?,?,?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([
    $cName,
    $cUnit,
    $cTypeID,
    $UserID,
    $cCity,
]);

if($ok) {
    header('Location: ../profil.php');
} else {
    echo 'ERROR: Transfer problem...';
}
