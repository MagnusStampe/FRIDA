<?php
$cQuery = 'SELECT COUNT(*) FROM trecipe';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$nRecipeCount = $stmt->fetchColumn();