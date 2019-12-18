<?php

$cQuery = 'SELECT * FROM tcreditcard WHERE nUserID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID]);
$cards = $stmt->fetchAll();

$ccNr = 1;
foreach ($cards as $card) {
    echo "
    <h2>Creditcard $ccNr</h2>
    <h3>IBAN Code: $card->cIBANcode</h3>
    <h3>Expiration date: $card->cExpirationDate</h3>
    <h3>CCV: $card->cCCV</h3>
    <h3>Total Amount: $card->nTotalMoneySpent kr.</h3> 
    <br>";

    $ccNr++;
}