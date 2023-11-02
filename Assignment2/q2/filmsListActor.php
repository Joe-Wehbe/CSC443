<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?<?php echo time() ?>" />

    <title></title>
</head>

<body>
    <?php
    require_once '..\pdo.php';

    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: ../Assignment/signin.php");
        exit(); 
    }

    $actor_id = $_GET['actorID'];

    $sql = "SELECT * FROM actor where actor_id=:actor_id;";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(':actor_id', $actor_id);
    $stm->execute();
    $actor = $stm->fetch(PDO::FETCH_ASSOC);

    echo "<h1>Films of actor: " . $actor['first_name'] . " " . $actor['last_name'] . '</h1>';

    $sql = 'SELECT title , name, length FROM actor join film_actor on actor.actor_id=film_actor.actor_id
            join film on film_actor.film_id=film.film_id 
            join film_category on film_category.film_id=film.film_id
            join category on category.category_id=film_category.category_id
            where actor.actor_id=:actor_id;';
    $stm = $pdo->prepare($sql);
    $stm->bindParam(':actor_id', $actor_id);
    $stm->execute();
    $films = $stm->fetchAll(PDO::FETCH_ASSOC);

    echo '<table border="1"><thead><tr><td> Film Title</td><td>Category</td><td>duration</td></tr></thead>';
    foreach ($films as $film) {
        echo "<tr><td>" . $film['title'] . "</td>";
        echo "<td>" . $film['name'] . "</td>";
        echo "<td>" . (int) ($film['length'] / 60) . "h" . ($film['length'] % 60) . "</td></tr>";
    }
    echo "</table>\n";
    ?>
</body>

</html>