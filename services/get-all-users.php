<?php
$cQuery = 'SELECT * FROM tuser';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aAllUsers = $stmt->fetchAll();