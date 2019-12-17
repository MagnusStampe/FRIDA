<?php

require_once(__DIR__ . '/connect.php');

$nRecipeID = 1;


$cQuery = 'DELETE FROM tuser WHERE nUserID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $nRecipeID]);


header('Location: ../login.php');
