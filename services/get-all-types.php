<?php
$cQuery = 'SELECT * FROM ttype';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aAllTypes = $stmt->fetchAll();