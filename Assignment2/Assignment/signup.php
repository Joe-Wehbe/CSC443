<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="signup.css?<?php echo time() ?>" />
        <title>Sign up</title>

    </head>

    <?php require_once("pdo.php");
    session_start();?>

    <body>
        <h1>Create your account</h1>

        <form method = "POST" action="signup.php">
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

            <input class="confirm" type="password" name="confirmation" placeholder="Confirm password..." value="<?php echo isset($_POST['confirmation']) ? $_POST['confirmation'] : ''; ?>"<?php 
            if(isset($_POST['confirmation'])){
                $confirmation = $_POST['confirmation'];
                if($password !== $confirmation){
                    echo 'id="highlight"';
                }
            }?>><br>         
            
            <input class="signup" type="submit" name="signup" value="Sign up">
        </form> 

        <h5 class="account"><a href="signin.php">Already have an account? Sign in</a></h5> 

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmation = $_POST["confirmation"];

            if(strlen($username) < 3 && strlen($password) < 3){
                ?><h5> Your username and password are too short! </h5><?php
            }
            elseif(strlen($username) < 3){
                ?><h5> Your username is too short! </h5><?php
            }
            elseif(strlen($password) < 3){
                ?><h5> Your password is too short! </h5><?php
            }
            elseif($password != $confirmation){
                ?><h5> Incorrect password confirmation! </h5><?php
            }
            else{

                $stm = $pdo->prepare("SELECT count(*) AS user_count FROM users WHERE username=?");
                $stm->bindParam(1,$username);
                $stm->execute();
                $result = $stm->fetch(PDO::FETCH_ASSOC);
    
                if($result['user_count'] > 0){
                    ?><h5> Username already exists! </h5><?php
                }
                else{
                    $password = password_hash($password, PASSWORD_BCRYPT);
                    $stm = $pdo->prepare("INSERT INTO users (username, password) VALUES(?,?)");
                    $stm->bindParam(1, $username);
                    $stm->bindParam(2, $password);
                    $stm->execute();
                    
                    $_SESSION['authenticated'] = true;
                    $_SESSION['username'] = $username;
                    header("Location: menu.php");
                    exit();
                }
            }       
        }
        ?>
    </body>
</html