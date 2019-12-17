<?php

require_once(__DIR__ . '/services/connect.php');

$nRecipeID = 1;



$cQuery = 'SELECT * FROM trecipe WHERE nRecipeID = :id';
$stmt = $pdo->prepare($cQuery);
$stmt->execute(['id' => $nRecipeID]);
$recipe = $stmt->fetch();

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
        <form action="services/update-recipe.php" method="post">
            <input type="text" name="txtName" id="" value="<?php echo $recipe->cName ?>">
            <textarea name="txtDescription" id="" cols="50" rows="20"><?php echo $recipe->cDescription ?></textarea>
            <input type="submit" name="submit" value="Update">
        </form>
        <form action="services/delete-recipe.php" method="POST">
            <input type="submit" name="deleteBtn" value="Delete">
        </form>
    </section>

</body>

</html>