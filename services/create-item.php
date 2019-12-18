<?php

session_start();

require_once(__DIR__ . '/connect.php');

$cName = $_POST['txtName'];
$cUnit = $_POST['txtUnit'];
$cTypeID = $_POST['txtType'];
$UserID = $_SESSION['userID'];
$nAmount = $_POST['txtAmount'];

$cQuery  = 'CALL insertNew(?,?,?,?,?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([
    $cTypeID,
    $cName,
    $cUnit,
    $UserID,
    $nAmount
]);

if($ok) {
    header('Location: ../profil.php');
} else {
    echo 'ERROR: Transfer problem...';
}
