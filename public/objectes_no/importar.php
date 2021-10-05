<?php
require('../../myHelpers/myHelpers.php');
    
function atMadrid($jugador){
    return (isset($jugador[1]) && $jugador[1] == 'Atlético de Madrid');
}
function esMayor($a,$b){
    return $a['dorsal'] < $b['dorsal'];
}

$greetins = "Importar plantilla del Atl Madrid";
$fitxer = "../../dades/EjemploPlantillas.csv";
//$sqlSelect = "SELECT Nombre, Edad, Pais, Dorsal, Posicion, G  FROM EjemploPlantillas";
$plantilla_atm=[];
if (!$fp = fopen($fitxer, "r")){
    echo "No s'ha pogut obrir el fitxer $fitxer";
}
$contents = fread($fp,filesize($fitxer));
$linees = explode(PHP_EOL,$contents);
foreach ($linees as $linea){
   $resultats[] = explode(',',$linea);
}
$atMadrid = array_filter($resultats,"atMadrid");
foreach ($atMadrid as $jugador) {
    $planter[] = [
        'Nom' => $jugador[3] . ',' . $jugador[4] . ' ' . $jugador[5],
        'edat' => $jugador[7],
        'pais' => $jugador[9],
        'dorsal' => $jugador[11],
        'posició' => $jugador[10],
        'gols' => $jugador[17]
    ];
}
usort($planter, "esMayor");

require('importar.view.php');