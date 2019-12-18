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
        <a href="services/logout.php">Logout</a>
    </section>
    <section>

        <?php
        $cQuery = 'SELECT * FROM trecipe';
        $stmt = $pdo->prepare($cQuery);
        $stmt->execute();
        $recipes = $stmt->fetchAll();

        foreach ($recipes as $recipe) { ?>
            <div>
                <section>
                    <h1><?php echo $recipe->cName ?></h1>
                    <p><?php echo $recipe->cDescription ?></p>
                    <a href="recipe.php?reID=<?php echo $recipe->nRecipeID ?>">Edit</a>
                    <h3>Ingredients</h3>
                    <ol>
                    <?php
                    $cRecipeID =  $recipe->nRecipeID;
                    include('services/get-recipe-ingredients.php');
                    foreach($aRecipeIngredients as $jIngredient) {
                        ?>
                            <li><?= $jIngredient->cName.' '.$jIngredient->nValue.' '.$jIngredient->cUnit?></li>
                        <?php
                    }
                    ?>
                    </ol>
                </section>
            </div>
        <?php } ?>
    </section>
</body>

</html>