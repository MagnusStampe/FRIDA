<?php
session_start();

require_once(__DIR__ . '/connect.php');

$UserID = $_SESSION['userID'];
$ConvID = $_GET['convid'];

$cQuery = 'DELETE FROM tfridge 
           WHERE tfridge.nUserID = :id 
           AND tfridge.nConvID = :cId'; 
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID, 'cId' => $ConvID]);

header('Location: ../profil.php');
