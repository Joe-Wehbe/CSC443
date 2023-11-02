<!DOCTYPE html>
<html>

    <?php
    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: signin.php");
        exit(); 
    }?>

    <a href="logout.php">Log out</a>


</html>






