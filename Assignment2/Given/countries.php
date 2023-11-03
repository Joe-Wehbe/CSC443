<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css?<?php echo time() ?>" />
        <title></title>
    </head>

    <?php

    require_once("pdo.php");
    ?>
    <h1> Countries List </h1>
    <?php
    
    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: Assignment/signin.php");
        exit(); 
    }

    $sql = "select * from country";
    $stm = $pdo->prepare($sql);
    $stm->execute();

    $countries = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table border="1" style="border-collapse: collapse">

        <thead>
            <tr>
                <th>Country ID</th>
                <th>Country Name</th>
                <th>Last Update</th>
            </tr>
        </thead>

        <?php foreach ($countries as $country) { ?>
            <tr>
                <?php foreach ($country as $fieldName => $fieldValue) { ?>
                    <td>
                        <?php echo $fieldName . ':' . $fieldValue . " "; ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</html>
