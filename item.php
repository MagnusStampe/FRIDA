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

    <?php $cQuery = 'SELECT * FROM tfridge INNER JOIN tconversion ON tfridge.nConvID=tconversion.nConvID WHERE tfridge.nUserID = :id AND tconversion.nConvID = :cId';
    $stmt = $pdo->prepare($cQuery);
    $stmt->execute(['id' => $UserID, 'cId' => $ConvID]);
    $item = $stmt->fetch();

    echo "<div>
        <form action='' method='post'>
            <input type='text' name='' id='' value='$item->cName'>
            <input type='text' name='' id='' value='$item->nValue'>
            <input type='submit' value='Update'>
        </form>
      </div>"; ?>
        
    </section>

</body>

</html>