<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css?<?php echo time() ?>" />
        <title>Sign up</title>
    </head>

    <?php require_once("pdo.php");?>

    <body>
        <h1>Welcome</h1>

        <form method = "POST" action="signin.php">
            <input type="text" name="username" placeholder="Username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
            <input type="password" name="password" placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
            <input type="submit" name="signin" value="Sign in">
        </form> 

        <?php
        session_start();

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
                    header("Location: menu.php");
                    exit();
                }
                else{
                    echo "Incorrect password!";
                }
            }
            else{
                echo("Username does not exist!");

            }            
        }
        ?>
    </body>
</html