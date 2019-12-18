<?php

session_start();

require_once(__DIR__ . '/connect.php');

$UserID = $_SESSION['userID'];

$cQuery  = 'CALL deleteUser(?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([$UserID]);

if($ok) {
    header('Location: ../index.php');
} else {
    echo 'ERROR: Delete problem...';
}

