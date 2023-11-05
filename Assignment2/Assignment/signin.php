<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="signin.css?<?php echo time() ?>" />
        <title>Sign in</title>
    </head>

    <?php require_once("pdo.php");
    session_start();?>

    <body>
        <h1>Sign into your account</h1>

        <form method = "POST" action="signin.php">
            <input class="email" type="text" name="username" placeholder="Username..." value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" <?php 
                if(isset($_POST['username'])){
                    $username = $_POST['username'];
                    if(strlen($username) < 3){
                        echo 'id="highlight"';
                    }
                }?>><br>            
            
            <input class="password" type="password" name="password" placeholder="Password..." value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" <?php 
            if(isset($_POST['password'])){
                $password = $_POST['password'];
                if(strlen($password) < 3){
                    echo 'id="highlight"';
                }
            }?>><br>            
            
            <input class="signin" type="submit" name="signin" value="Sign in">
        </form> 

        <h5 class="account"><a href="signup.php">Don't have an account? Sign up</a></h5> 

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $_POST["username"];
            $password = $_POST['password'];

            $stm = $pdo->prepare("SELECT count(*) AS user FROM users WHERE username=?");
            $stm->bindParam(1,$username);
            $stm->execute();
            $result = $stm->fetch(PDO::FETCH_ASSOC);

            if($result['user'] > 0){

                $stm = $pdo->prepare("SELECT * FROM users WHERE username=?");
                $stm->bindParam(1,$username);
                $stm->execute();
                $result = $stm->fetch(PDO::FETCH_ASSOC);

                if(password_verify($password, $result['password'])){
                    $_SESSION['authenticated'] = true;
                    $_SESSION['username'] = $username;
                    header("Location: menu.php");
                    exit();
                }
                else{
                    ?><h5> Incorrect password! </h5><?php
                }
            }
            else{
                ?><h5> Username does not exist! </h5><?php

            }            
        }
        ?>
    </body>
</html