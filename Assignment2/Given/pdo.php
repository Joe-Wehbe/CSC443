<?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $dbName = 'sakila';
    try {
        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $user, $password);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . "<br/>";
        die();
    }
