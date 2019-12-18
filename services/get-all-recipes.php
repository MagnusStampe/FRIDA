<?php
$cQuery = 'SELECT * FROM trecipe';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aAllRecipes = $stmt->fetchAll();