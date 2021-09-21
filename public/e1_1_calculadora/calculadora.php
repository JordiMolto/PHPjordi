<?php

$x = $_GET['$valorx'];
$y = $_GET['$valory'];

function suma($x, $y){ return $x + $y; };
function resta($x, $y){ return $x - $y; };
function multiplicacio($x, $y){ return $x * $y; };
function divisio($x, $y){ return $x / $y; };

require_once('calculadora.view.php');
?>
