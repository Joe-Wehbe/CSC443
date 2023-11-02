<!DOCTYPE html>

<html>

<?php
$host = 'localhost';
$dbName = 'sakila';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $user, $password);
    echo 'Connection working' . "<br/>" . "<br/>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
    die();
}

$sql = "select * from country";
$stm = $pdo->prepare($sql);
$stm->execute();

$countries = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="1" style="border-collapse: collapse">
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
