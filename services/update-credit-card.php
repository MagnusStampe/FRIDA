<?php
require_once(__DIR__ . '/connect.php');

$nID = $_POST['nID'];
$cIBAN = $_POST['txtIBAN'];
$cCCV = $_POST['txtCCV'];
$cExpirationDate = $_POST['txtExpire'];
$cTotalMoneySpent = $_POST['txtMoneySpent'];

$cQuery = 'UPDATE tcreditcard
SET cIBANcode = :IBAN,
cExpirationDate = :expire,
cCCV = :ccv,
nTotalMoneySpent = :spent
WHERE nCreditCardID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":id", $nID, PDO::PARAM_STR);
$stmt->bindValue(":IBAN", $cIBAN, PDO::PARAM_STR);
$stmt->bindValue(":expire", $cExpirationDate, PDO::PARAM_STR);
$stmt->bindValue(":ccv", $cCCV, PDO::PARAM_STR);
$stmt->bindValue(":spent", $cTotalMoneySpent, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../admin.php#credit_cards');
