<?php
$cQuery = 'SELECT * FROM tconversion';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aAllConversions = $stmt->fetchAll();