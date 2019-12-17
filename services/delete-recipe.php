<?php

require_once(__DIR__ . '/connect.php');

$nRecipeID = 1;


$cQuery = 'DELETE FROM trecipe WHERE nRecipeID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $nRecipeID]);


header('Location: ../recipes.php');
