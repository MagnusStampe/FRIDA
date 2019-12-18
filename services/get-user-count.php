<?php
$cQuery = 'SELECT COUNT(*) FROM tuser';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$nUserCount = $stmt->fetchColumn();