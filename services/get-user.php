<?php
$cUserName = 'Brian';

$cQuery = 'SELECT * FROM tuser';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$user = $stmt->fetch();

var_dump($user);