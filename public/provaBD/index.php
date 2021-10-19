<?php
require_once('../kernel.php');

try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=$test', 'batoi', '1234');
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

$sql = "SELECT * FROM pelucas";
$pdoSt = $conn->query($sql);
$result = ($pdoSt)->fetchAll(PDO::FETCH_OBJ);

echo "<ul>";

foreach ($result as $objecte){
    echo "<li>".$objecte->donor."</li>";
}

echo "</ul>";