<?php

echo '<h2>My fridge</h2>';


$cQuery = 'SELECT tconversion.cName,
            tconversion.nConvID, 
            tfridge.nValue, 
            tconversion.cUnit, 
            ttype.cName 
            AS cTypename 
            FROM tfridge 
            INNER JOIN tconversion 
            ON tfridge.nConvID=tconversion.nConvID 
            INNER JOIN ttype 
            ON tconversion.nTypeID=ttype.nTypeID 
            WHERE nUserID = :id';

$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID]);
$items = $stmt->fetchAll();

foreach ($items as $item) {

    echo '<section>
    <h4>Category: ' . $item->cTypename . '</h4>
    <h3>' . $item->cName . ' ' . $item->nValue . ' ' . $item->cUnit . '</h3>
    <a href="item.php?convid='.$item->nConvID.'">Edit</a>
    </section>';
}