<?php
$cQuery = 'SELECT COUNT(*) FROM tcitycode';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$nCityCount = $stmt->fetchColumn();