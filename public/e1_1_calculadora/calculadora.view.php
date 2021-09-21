<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exercici 1</title>
</head>


<body>
    <?php

    print_r($_GET);
    echo "<br><br>";
    echo 'El total de la suma dels dos paràmetres introduïts és: ';
    echo suma($x, $y);
    echo "<br><br>";
    echo 'El total de la resta dels dos paràmetres introduïts és: ';
    echo resta($x, $y);
    echo "<br><br>";
    echo 'El total de la multiplicació dels dos paràmetres introduïts és: ';
    echo multiplicacio($x, $y);
    echo "<br><br>";
    echo 'El total de la divisió dels dos paràmetres introduïts és: ';
    //echo divisio($x,$y);

    echo "<br><br>";
    echo "L'ordinador que fa la petició és: " . $_SERVER['SERVER_ADDR'];

    echo "<br><br>";
    echo "Parametres de petició en la variable: " . $_SERVER['REQUEST_METHOD'];

    echo "<br><br>";
    echo "La ruta del lloc web en l'ordinador local és: " . $_SERVER['SCRIPT_FILENAME'];

    ?>
</body>

</html>