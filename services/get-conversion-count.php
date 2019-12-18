<?php
$cQuery = 'SELECT COUNT(*) FROM tconversion';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$nConversionCount = $stmt->fetchColumn();