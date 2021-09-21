<?php
//exercici 1.C
$nom = $_GET['$valornom'];

$trim= trim($nom, "/");


if($nom == false){
    $nom == 'Jordi';
}
$strlenNom= strlen($nom);
$mayus= strtoupper($nom);
$minus= strtolower($nom);
$replace= str_ireplace('o', '0', $nom);
$ireplace= str_ireplace($nom, 'a', 'A');
$stripos= stripos($nom, 'a');

//Segon apartat
$prefix = $_GET['$valorpref'];

if($prefix == false){
    echo "<br><br>";
    echo stripos($nom, $prefix);
}

//exercici 1.D

echo "El querystring de la url: " .parse_url($_GET);

echo "<br><br>";
echo "El protocol utilitzat: " . $_SERVER['REQUEST_METHOD'];

echo "<br><br>";
echo "L'usuari que fa la petició és: " . $_SERVER['SERVER_ADDR'];

echo "<br><br>";
echo "El path de la url: " . $_SERVER['REQUEST_URI'];

require_once('cadenes.view.php');
