<?php
$cQuery = 'SELECT COUNT(*) FROM tcreditcard';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$nCreditCardCount = $stmt->fetchColumn();