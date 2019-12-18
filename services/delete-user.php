<?php

require_once(__DIR__ . '/connect.php');

$UserID = 3;


$cQuery = 'DELETE FROM tuser WHERE nUserID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID]);


header('Location: ../login.php');
