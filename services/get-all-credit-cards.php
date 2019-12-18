<?php
$cQuery = 'SELECT * FROM tcreditcard';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aAllCreditCards = $stmt->fetchAll();