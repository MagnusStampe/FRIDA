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
    <title>FRIDA - Database project</title>
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

    <h2>Navigate to table</h2>
    <a href="#users">Users</a><br>
    <a href="#cities">Cities</a><br>
    <a href="#recipes">Recipes</a><br>
    <a href="#conversions">Conversions</a><br>
    <a href="#types">Types</a><br>
    <a href="#credit_cards">Credit cards</a><br>
    
    <h2 id="users">tuser</h2>
    <?php include_once('services/get-user-count.php'); ?>
    <p><?= $nUserCount ?> users</p>
    <table>
    <tr>
        <td>nUserID</td>
        <td>cUsername</td>
        <td>cName</td>
        <td>cSurname</td>
        <td>cPhonenumber</td>
        <td>cPassword</td>
        <td>cEmail</td>
        <td>cAddress</td>
        <td>nCityID</td>
        <td>dJoinDate</td>
        <td>nTotalAmount</td>
    </tr>
    <?php
    include_once('services/get-all-users.php');
    foreach($aAllUsers as $jUser) {
    ?>
    <form action="services/update-user.php" method="POST">
    <tr>
        <td>
            <?= $jUser->nUserID ?>
            <input name="id" type="hidden" value="<?= $jUser->cUserID ?>">
        </td>
        <td><input name="username" type="text" value="<?= $jUser->cUsername ?>"></td>
        <td><input name="name" type="text" value="<?= $jUser->cName ?>"></td>
        <td><input name="surname" type="text" value="<?= $jUser->cSurname ?>"></td>
        <td><input name="phone" type="text" value="<?= $jUser->cPhonenumber ?>"></td>
        <td><input name="password" type="text" value="<?= $jUser->cPassword ?>"></td>
        <td><input name="email" type="text" value="<?= $jUser->cEmail ?>"></td>
        <td><input name="address" type="text" value="<?= $jUser->cAddress ?>"></td>
        <td><?= $jUser->nCityID ?></td>
        <td><?= $jUser->dJoinDate ?></td>
        <td><?= $jUser->nTotalAmount ?></td>
        <td><button>Update</button></td></tr>
    </tr>
    </form>
    <?php } ?>
    </table>

    <h2 id="cities">tcitycode</h2>
    <?php include_once('services/get-city-count.php'); ?>
    <p><?= $nCityCount ?> cities</p>
    <table>
        <tr>
            <td>nCityID</td>
            <td>cCityName</td>
        </tr>
        <?php
        include_once('services/get-all-citycodes.php');
        foreach($aAllCities as $jCity) {
        ?>
        <form action="services/update-city.php">
        <tr>
            <td>
                <?= $jCity->nCityID ?>
                <input name="nID" type="hidden" value="<?= $jCity->nCityID ?>">
            </td>
            <td><input name="txtName" type="text" value="<?= $jCity->cCityName ?>"></td>
            <td><button>Update</button></td></tr>
        </form>
        <?php
        }

        ?>
    </table>

    <h2 id="recipes">trecipe</h2>
    <?php include_once('services/get-recipe-count.php'); ?>
    <p><?= $nRecipeCount ?> recipies</p>
    <table>
        <tr>
            <td>nRecipeID</td>
            <td>cName</td>
            <td>cDescription</td>
        </tr>
        <?php
        include_once('services/get-all-recipes.php');
        foreach($aAllRecipes as $jRecipe) {
        ?>
        <form action="services/update-recipe.php">
        <tr>
            <td>
                <?= $jRecipe->nRecipeID ?>
                <input name="nID" type="hidden" value="<?= $jRecipe->nRecipeID ?>">
            </td>
            <td><input name="txtName" type="text" value="<?= $jRecipe->cName ?>"></td>
            <td><input name="txtName" type="textarea" value="<?= $jRecipe->cDescription ?>"></td>
            <td><button>Update</button></td></tr>
        </form>
        <?php
        }
        ?>
    </table>

    <h2 id="conversions">tconversion</h2>
    <?php include_once('services/get-conversion-count.php'); ?>
    <p><?= $nConversionCount ?> conversions</p>
    <table>
        <tr>
            <td>nConvID</td>
            <td>cName</td>
            <td>cUnit</td>
            <td>cTypeID</td>
        </tr>
        <?php
        include_once('services/get-all-conversions.php');
        foreach($aAllConversions as $jConversion) {
        ?>
        <form action="services/update-conversion.php">
        <tr>
            <td>
                <?= $jConversion->nConvID ?>
                <input name="nID" type="hidden" value="<?= $jConversion->nConvID ?>">
            </td>
            <td><input name="txtName" type="text" value="<?= $jConversion->cName ?>"></td>
            <td><input name="txtUnit" type="text" value="<?= $jConversion->cUnit ?>"></td>
            <td><?= $jConversion->nTypeID ?></td>
            <td><button>Update</button></td></tr>
        </form>
        <?php
        }
        ?>
    </table>

    <h2 id="types">ttype</h2>
    <?php include_once('services/get-type-count.php'); ?>
    <p><?= $nTypeCount ?> types</p>
    <table>
        <tr>
            <td>nTypeID</td>
            <td>cName</td>
        </tr>
        <?php
        include_once('services/get-all-types.php');
        foreach($aAllTypes as $jType) {
        ?>
        <form action="services/update-type.php">
        <tr>
            <td>
                <?= $jType->nTypeID ?>
                <input name="nID" type="hidden" value="<?= $jType->nTypeID ?>">
            </td>
            <td><input name="txtName" type="text" value="<?= $jType->cName ?>"></td>
            <td><?= $jType->nTypeID ?></td>
            <td><button>Update</button></td></tr>
        </form>
        <?php
        }
        ?>
    </table>

    <h2 id="credit_cards">tcreditcard</h2>
    <?php include_once('services/get-credit-card-count.php'); ?>
    <p><?= $nCreditCardCount ?> credit cards</p>
    <table>
        <tr>
            <td>nCreditCardID</td>
            <td>nUserID</td>
            <td>cIBANcode</td>
            <td>cExpirationDate</td>
            <td>cCCV</td>
            <td>nTotalMoneySpent</td>
        </tr>
        <?php
        include_once('services/get-all-credit-cards.php');
        foreach($aAllCreditCards as $jCreditCard) {
        ?>
        <form action="services/update-credit-card.php" method="POST">
        <tr>
            <td>
                <?= $jCreditCard->nCreditCardID ?>
                <input name="nID" type="hidden" value="<?= $jCreditCard->nCreditCardID ?>">
            </td>
            <td><?= $jCreditCard->nUserID ?></td>
            <td><input name="txtIBAN" type="text" value="<?= $jCreditCard->cIBANcode ?>"></td>
            <td><input name="txtExpire" type="text" value="<?= $jCreditCard->cExpirationDate ?>"></td>
            <td><input name="txtCCV" type="text" value="<?= $jCreditCard->cCCV ?>"></td>
            <td><input name="txtMoneySpent" type="text" value="<?= $jCreditCard->nTotalMoneySpent ?>"></td>
            <td><button>Update</button></td></tr>
        </form>
        <?php
        }
        ?>
    </table>
</body>

</html>