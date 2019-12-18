<?php

require_once(__DIR__ . '/services/connect.php');

$UserID = 1;
$ConvID = 1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <section>

    <?php
    
    $cQuery = 'SELECT tconversion.cName, 
               tfridge.nValue, 
               tconversion.cUnit, 
               ttype.cName 
               AS cTypename 
               FROM tfridge 
               INNER JOIN tconversion 
               ON tfridge.nConvID=tconversion.nConvID 
               INNER JOIN ttype 
               ON tconversion.nTypeID=ttype.nTypeID 
               WHERE nUserID = :id 
               AND tconversion.nConvID = :cId';
    
    $stmt = $pdo->prepare($cQuery);
    $stmt->execute(['id' => $UserID, 'cId' => $ConvID]);
    $item = $stmt->fetch();

    echo "<div>
        <form action='services/update-item.php' method='post'>
            <h4>Name</h4><input type='text' name='txtName' id='' value='$item->cName'>
            <h4>Value</h4><input type='text' name='txtValue' id='' value='$item->nValue'>
            <input type='submit' value='Update'>
        </form>
        <form action='services/delete-item.php' method='post'>
            <input type='submit' value='Delete'>
        </form>
      </div>"; ?>
        
    </section>

</body>

</html>