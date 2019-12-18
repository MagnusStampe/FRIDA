<?php
$cQuery = 'SELECT COUNT(*) FROM ttype';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$nTypeCount = $stmt->fetchColumn();