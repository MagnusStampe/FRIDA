<?php

session_start();

require_once(__DIR__ . '/connect.php');

$UserID = $_SESSION['userID'];

$cQuery = 'DELETE FROM tuser WHERE nUserID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID]);


header('Location: ../login.php');
