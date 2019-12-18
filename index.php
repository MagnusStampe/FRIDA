<?php

session_start();

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
    <h2>Login</h2>
    <form action="" method="post">
        <input type="text" name="txtusername" id="" placeholder="Username" value="">
        <input type="password" name="txtpassword" id="" placeholder="Password" value="">
        <button type="submit">Login</button>
    </form>
    <h2>Create user</h2>
    <form action="services/create-user.php" method="POST">
        <h3>Profile info</h3>
        <input name="username" type="text" placeholder="Username" required>
        <input name="name" type="text" placeholder="Firstname" required>
        <input name="surname" type="text" placeholder="Surname" required>
        <input name="email" type="text" placeholder="Email" required>
        <input name="password" type="text" placeholder="Password" required>
        <input name="phone" type="text" placeholder="Phone number" required>
        <h3>Home details</h3>
        <input name="address" type="text" placeholder="Address" required>
        <input name="city" type="text" placeholder="City" required>
        <h3>Credit card</h3>
        <input name="ccv" type="text" placeholder="CVV" required>
        <input name="iban" type="text" placeholder="IBAN code" required>
        <input name="expire" type="text" placeholder="Expiration date" required>
        <br><button>Create</button>
    </form>

</body>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    
    if(empty($username)){
        
        echo "Please enter a username ";
        
        if(empty($password)){
            
            echo "Please enter a password";
            
        }
    }
    
    
    if ($username && $username) {
        
        $cQuery = 'SELECT * FROM tuser';
        $stmt = $pdo->prepare($cQuery);
        $stmt->execute();
        $users = $stmt->fetchAll();
        
        foreach($users as $user) {
            if ($user->cUsername == $username && $user->cPassword == $password) {
                
                $_SESSION['userID'] = $user->nUserID;

                $UserID = $_SESSION['userID'];

                $_SESSION["loggedin"] = true;

                header('Location: profil.php');
                
            }
        }
    }    
}

?>

</html>