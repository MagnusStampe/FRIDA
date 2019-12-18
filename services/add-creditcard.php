<?php 

require_once(__DIR__ . '/connect.php');

$UserID = 1;

$IBANcode = $_POST['txtIBANcode'];
$expDate = $_POST['txtExpDate'];
$ccv = $_POST['txtCvv'];

$cQuery = 'INSERT INTO tcreditcard 
            (nCreditCardID,
            nUserID, 
            cIBANcode, 
            cExpirationDate, 
            cCCV, 
            nTotalMoneySpent) 
            VALUES 
            (NULL, 
            :id, 
            :ibancode, 
            :expdate, 
            :ccv, 
            0)';

$stmt = $pdo->prepare($cQuery);
$stmt->bindValue(":id", $UserID, PDO::PARAM_STR);
$stmt->bindValue(":ibancode", $IBANcode, PDO::PARAM_STR);
$stmt->bindValue(":expdate", $expDate, PDO::PARAM_STR);
$stmt->bindValue(":ccv", $ccv, PDO::PARAM_STR);
$stmt->execute();


header('Location: ../profil.php');


