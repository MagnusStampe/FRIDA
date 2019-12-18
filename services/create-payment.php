<?php
require_once(__DIR__ . '/connect.php');

$nID = $_GET['id'];
$nAmount = $_GET['amount'];
$dTime = gmdate("Y-m-d H:i:s");
$cQuery = 'INSERT INTO tcreditcardpayment (nCreditCardID, dTimeStamp, nAmount)
VALUES (?,?,?)';
$stmt = $pdo->prepare($cQuery);
$ok = $stmt->execute([$nID, $dTime, $nAmount]);

header('Location: ../profil.php');