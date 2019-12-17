
<form action=""></form>

<?php

echo '<h2>My fridge</h2>';


$cQuery = 'SELECT * FROM tfridge INNER JOIN tconversion ON tfridge.nConvID=tconversion.nConvID WHERE nUserID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $UserID]);
$items = $stmt->fetchAll();

foreach ($items as $item) {
    echo '<div><h3>' . $item->cName . '</h3></div>';
}
