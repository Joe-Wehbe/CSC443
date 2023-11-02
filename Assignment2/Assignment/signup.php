<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css?<?php echo time() ?>" />
        <title>Sign up</title>
    </head>

    <?php require_once("..\pdo.php");?>

    <body>
        <h1>Welcome</h1>

        <form method = "POST" action="signup.php">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="sign up" value="Sign up">
        </form> 

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    
            $stm = $pdo->prepare("INSERT INTO users (username, password) VALUES(?,?)");
            $stm->bindParam(1, $username);
            $stm->bindParam(2, $password);
            $stm->execute();
        }
        ?>

    </body>
</html