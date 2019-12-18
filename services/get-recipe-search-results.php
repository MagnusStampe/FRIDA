<?php
if(isset($_GET)) {
    if(isset($_GET['s'])) {
        $cSearch = $_GET['s'];
        $cQuery = "SELECT trecipe.nRecipeID, trecipe.cName, trecipe.cDescription
            FROM trecipe
                INNER JOIN trecipeconversion
                ON trecipeconversion.nRecipeID = trecipe.nRecipeID
                    INNER JOIN tconversion
                    ON tconversion.nConvID = trecipeconversion.nConvID
                    WHERE tconversion.cName LIKE '%$cSearch%'
        UNION
            SELECT trecipe.nRecipeID, trecipe.cName, trecipe.cDescription
                FROM trecipe
                WHERE trecipe.cName LIKE '%$cSearch%'";
        $stmt = $pdo->prepare( $cQuery );
        $stmt->execute([]);

        $aRecipes = $stmt->fetchAll();
        foreach($aRecipes as $jRecipe) {
            $cQuery = "SELECT tconversion.cName
            FROM tconversion
                INNER JOIN trecipeconversion
                ON trecipeconversion.nConvID = tconversion.nConvID
            WHERE trecipeconversion.nRecipeID = $jRecipe->nRecipeID";
            $stmt = $pdo->prepare( $cQuery );
            $stmt->execute([]);
            $aIngredients = $stmt->fetchAll();
            $jRecipe->aIngredients = $aIngredients;
        }
    }
}