<!DOCTYPE html>

<html>

    <?php

    require_once("pdo.php");

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
