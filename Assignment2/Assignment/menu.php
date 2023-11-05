<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="menu.css?<?php echo time() ?>" />
        <title>Menu</title>
    </head>

    <?php require_once("pdo.php");?>

    <?php
    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: signin.php");
        exit(); 
    }?>
    
    <h1> Welcome, <?php echo $_SESSION['username']?>!</h1>
    <h3> What would you like to do?</h3>


    <table border = "1">
        <thead>
            <tr>
                <th>Menu</th>
            </tr>
        <thead>

        <tr><td><a href="../Given/countries.php">View Countries</a></td></tr>
        <tr><td><a href="../Given/actors.php">View Actors</a></td></tr>
        <tr><td><a href="signin.php">Log Out</a></td></tr>

    </table>


</html>






