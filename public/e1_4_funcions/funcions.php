<?php

$psswd = 'df+g/d=fg';/*$_GET['$valorpsswd'];*/
function contrasenyaSegura($psswd)
{

    if (strlen($psswd) <= 8) {
        echo "ERROR. La contrassenya té que tindre al menys 8 caràcters.";
    } else {
        echo "Longitud de la contrassenya correcta.";
    }

    echo "<br><br>";

    if (ctype_upper($psswd)) {
        echo "La contrassenya no conté lletres minúscules.";
    } else {
        echo "La contrassenya conté lletres minúscules.";
    }

    echo "<br><br>";

    if (ctype_lower($psswd)) {
        echo "La contrassenya no conté lletres majúscules.";
    } else {
        echo "La contrassenya conté lletres majúscules.";
    }

    echo "<br><br>";

    if (ctype_digit($psswd)) {
        echo "La contrassenya són tot números.";
    } else {
        echo "La contrassenya no són tot números.";
    }

    echo "<br><br>";

    if (str_contains($psswd, '=')) {
        echo 'El caracter "=" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '/')) {
        echo 'El caracter "/" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '_')) {
        echo 'El caracter "_" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '-')) {
        echo 'El caracter "-" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '*')) {
        echo 'El caracter "*" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '$')) {
        echo 'El caracter "$" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '@')) {
        echo 'El caracter "@" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '#')) {
        echo 'El caracter "#" sha trobat en la contrassenya.<br>';
    }
    if (str_contains($psswd, '+')) {
        echo 'El caracter "+" sha trobat en la contrassenya.<br>';
    }
};

function insert()
{
    $nom_taula = $_GET['$valortaula'];
    $noms_valors = array(
        "uno" => "a",
        "dos" => "b",
    );
    $consulta = sprintf("insert into $nom_taula $noms_valors");
}

echo "<br> Les operacions poden ser (suma'+', resta'-', divisió'/', multiplicació'*')";
echo "<br> Decideix el tipos de operació que vol.";
$x = $_GET['$valorx'];
$y = $_GET['$valory'];
$operacio = $_GET['$valoroperacio'];


function suma($x, $y)
{
    return $x + $y;
};
function resta($x, $y)
{
    return $x - $y;
};
function multiplicacio($x, $y)
{
    return $x * $y;
};
function divisio($x, $y)
{
    return $x / $y;
};


function resultat($operacio, $x, $y){
    if ($operacio) {
        if ($operacio == "+") {
            $operacio = 'suma';
            return suma($x, $y);
        }
        if ($operacio == "-") {
            $operacio = 'resta';
            return resta($x, $y);
        }
        if ($operacio == "/") {
            $operacio = 'divisio';
            return divisio($x, $y);
        }
        if ($operacio == "*") {
            $operacio = 'multiplicacio';
            return multiplicacio($x, $y);
        }
    } else {
        echo "Deu de possar el tipo de operació que dessitja.";
    }
};

require_once('funcions.view.php');
