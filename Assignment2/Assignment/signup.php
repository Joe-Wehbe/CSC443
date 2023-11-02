<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css?<?php echo time() ?>" />
        <title>Sign up</title>

        <style>
            .highlight {border: 1px solid red;}

        </style>

    </head>

    <?php require_once("pdo.php");?>

    <body>
        <h1>Welcome</h1>

        <form method = "POST" action="signup.php">
            <input type="text" name="username" placeholder="Username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" <?php 
            if(isset($_POST['username'])){
                $username = $_POST['username'];
                if(strlen($username) < 3){
                    echo 'class="highlight"';
                }
            }?>>
            
            <input type="text" name="password" placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" <?php 
            if(isset($_POST['password'])){
                $password = $_POST['password'];
                if(strlen($password) < 3){
                    echo 'class="highlight"';
                }
            }?>> 

            <input type="text" name="confirmation" placeholder="Password"<?php 
            if(isset($_POST['confirmation'])){
                $confirmation = $_POST['confirmation'];
                if($password !== $confirmation){
                    echo 'class="highlight"';
                }
            }?>>             
            
            <input type="submit" name="signup" value="Sign up">
        </form> 

        <?php
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmation = $_POST["confirmation"];


            if(strlen($username) < 3 && strlen($password) < 3){
                echo "Your username and password are too short!";
            }
            elseif(strlen($username) < 3){
                echo "Your username is too short!";
            }
            elseif(strlen($password) < 3){
                echo "Your password is too short!";
            }
            elseif($password != $confirmation){
                echo "Incorrect password confirmation!";
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
                    $password = password_hash($password, PASSWORD_BCRYPT);
                    $stm = $pdo->prepare("INSERT INTO users (username, password) VALUES(?,?)");
                    $stm->bindParam(1, $username);
                    $stm->bindParam(2, $password);
                    $stm->execute();
                    
                    $_SESSION['authenticated'] = true;
                    header("Location: ../Given/actors.php");
                    exit();
                }
            }       
        }
        ?>
    </body>
</html