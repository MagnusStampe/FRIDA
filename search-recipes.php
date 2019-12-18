<?php
require_once(__DIR__ . '/services/connect.php');
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
        <a href="index.php">Login</a>
        <a href="profil.php">Profil</a>
        <a href="recipes.php">Recipes</a>
        <a href="search-recipes.php">Search recipes</a>
        <a href="admin.php">Admin</a>
    </section>
    <section>
        <h2>Search recipes</h2>
        <p>Find recipes which name or ingredients match search term</p>
        <form action="">
            <input name="s" type="text">
            <button>Search</button>
        </form>
    </section>
    <section>
    <h2>Search results</h2>
    <?php
    include(__DIR__.'/services/get-recipe-search-results.php');
    foreach($aRecipes as $jRecipe) {
        ?>
            <h3><?= $jRecipe->cName ?></h3>
            <div><?= $jRecipe->cDescription ?></div>
            <ol>
                <?php
                    foreach($jRecipe->aIngredients as $jIngredient) {
                        ?>
                            <li><?= $jIngredient->cName ?></li>
                        <?php
                    }
                ?>
            </ol>
        <?php
    }
    ?>
    </section>
</body>

</html>