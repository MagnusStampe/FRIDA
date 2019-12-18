<?php

echo '<h2>My fridge</h2>';

?>

<form action="services/create-item.php" method="post">
    <input type="text" name="txtName" placeholder="Name">
    <input type="text" name="txtUnit" placeholder="Unit">
    <input type="text" name="txtType" placeholder="Type">
    <input type="text" name="txtAmount" placeholder="Amount">
    <input type="submit" value="Add">
</form>

<?php

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