<?php
$cUsername = 'Ellioii';
$cPassword = 'IamNo0b';
$cEmail = 'resdfss@rkghrump.us';
$cAddress = 'Ther n´ here';
$cCity = 'Merica';
$cCCV = '123';
$cIBAN = 'DK212344442112';
$nExpirationDate = 1234;

// $cQuery = 'INSERT INTO tuser (cUsername, cPassword, cEmail, cAddress, nCityID)
// VALUES (?,?,?,?,?)';
$cQuery  = 'CALL createNewUser(?,?,?,?,?,?,?,?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([
    $cUsername,
    $cPassword,
    $cEmail,
    $cAddress,
    $cCity,
    $cCCV,
    $cIBAN,
    $nExpirationDate
]);
var_dump($ok);
