<?php
$cQuery = 'SELECT * FROM tcitycode';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aAllCities = $stmt->fetchAll();