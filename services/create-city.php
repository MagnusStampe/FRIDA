<?php
$cCityName = 'EliTown';

$cQuery = 'INSERT INTO tcitycode (cCityName)
VALUES (?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([$cCityName]);

if($ok) {
    return true;
} else {
    return false;
}