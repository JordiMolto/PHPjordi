<?php

use App\Connection;
use App\queryBuilder;

require_once('../../../kernel.php');

$conn = Connection::make();
$query = new queryBuilder($conn);
$arrayCamps=['dni'=>'248382U','nom'=> 'Adri','data'=> '1991-03-24','sexe'=> 'H','hobby'=> 222,'foto'=> 'casa.pdf'];

$sql = "SELECT * FROM alumnes";
$pdoSt = $conn->query($sql);
$result = ($pdoSt)->fetchAll(PDO::FETCH_OBJ);

echo "<ul>";

foreach ($result as $objecte){
    echo "<li>".$objecte->nom."</li>";
}

echo "</ul>";

$query->insert("alumnes",$arrayCamps);
//$query->deleteById("alumnes","21344242D");