<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?<?php echo time() ?>" />
    <title></title>
</head>

<body>
    <?php
    require_once 'pdo.php';

    ?>
    <h1 class="create">Actors List</h1>
    <?php

    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: Assignment/signin.php");
        exit(); 
    }

    if (!isset($_GET['pageIndex']))
        $pageIndex = 0;
    else
        $pageIndex = $_GET['pageIndex'];

    $sql = "SELECT * FROM actor";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    $nbActors = count($result);

    $startIndex = $pageIndex * 10;
    $sql = "SELECT * FROM actor order by first_name limit $startIndex , 10";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $actors = $stm->fetchAll(PDO::FETCH_ASSOC);

    echo '<table border="1"><thead><tr><td> Actor Name</td></tr></thead>';
    foreach ($actors as $actor) {
        echo "<tr><td><a href=movies.php?actorID=" . $actor['actor_id'] . ">";
        echo $actor['first_name'] . " " . $actor['last_name'] . "</a></td></tr>";
    }

    echo "</table><br>";?>

    <div><?php
        $nbPages = (int) ($nbActors / 10);
        if ($nbActors % 10 != 0)
            $nbPages++;
        echo '<br>Pages: ';
        for ($i = 0; $i < $nbPages; $i++) {
            echo '<a href="actors.php?pageIndex=' . $i . '">' . ($i + 1) . '</a> ';
        }
        ?>
    </div>
</body>

</html>