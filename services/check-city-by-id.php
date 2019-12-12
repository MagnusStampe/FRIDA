<?php
$nCityID = 1;

$cQuery = 'SELECT * FROM tcitycode WHERE nCityID = ?';
$stmt = $pdo->prepare($cQuery);
$stmt->execute([$nCityID]);
$city = $stmt->fetch();
if($city) {
    echo 'true';
    exit;
}  else {
    echo 'false';
    exit;
}