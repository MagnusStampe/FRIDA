<?php
$cQuery = "SELECT tconversion.cName, trecipeconversion.nValue, tconversion.cUnit
    FROM tconversion
        INNER JOIN trecipeconversion
        ON trecipeconversion.nConvID = tconversion.nConvID
    WHERE trecipeconversion.nRecipeID = $cRecipeID";
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
$aRecipeIngredients = $stmt->fetchAll();