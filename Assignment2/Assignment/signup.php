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

            if(strlen($username) < 3){
                echo "Enter a username with 3 characters minimum";
            }
            else{

                $stm = $pdo->prepare("SELECT count(*) AS user_count FROM users WHERE username=?");
                $stm->bindParam(1,$username);
                $stm->execute();
                $result = $stm->fetch(PDO::FETCH_ASSOC);
    
                if($result['user_count'] > 0){
                    echo "Username already exists!";
                }
                else{
                    $stm = $pdo->prepare("INSERT INTO users (username, password) VALUES(?,?)");
                    $stm->bindParam(1, $username);
                    $stm->bindParam(2, $password);
                    $stm->execute();
                }

            }
        
        }
        ?>

    </body>
</html