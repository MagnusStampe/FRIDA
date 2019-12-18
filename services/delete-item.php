<?php

require_once(__DIR__ . '/connect.php');

$UserID = 1;
$ConvID = 1;

$cQuery = 'DELETE FROM tfridge 
           WHERE tfridge.nUserID = :id 
           AND tfridge.nConvID = :cId'; 
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID, 'cId' => $ConvID]);


header('Location: ../profil.php');
