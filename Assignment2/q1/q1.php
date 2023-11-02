<?php
$host='localhost';
$dbName='sakila';
$user='root';
$password='root';

try {
	$pdo = new PDO('mysql:host='.$host.';dbname='.$dbName,$user, $password) ;
    echo 'connection  working';
}
catch (PDOException $e) {
	echo "Error: ".$e->getMessage()."<br/>" 	;
 	die() ;
}

$sql="select * from country";
$stm = $pdo->prepare($sql);
$stm->execute();

$countries = $stm->fetchAll(PDO::FETCH_ASSOC);

foreach($countries as $country)
{
    foreach($country as $fieldName => $fieldValue)
        echo $fieldName.':'.$fieldValue;
    echo '<br>';
}


?>