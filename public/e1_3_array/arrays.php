<?php

    // Array de 7 noms:
    $noms = array("Mauro", "Jordi", "Paula", "Sara", "Juan", "Saul", "Domingo");
    echo "Numero de noms que hi ha en el array: ".count($noms);
    echo "<br>";
    echo "<br>";
    echo "Array separat per separació: ".implode(" ",$noms);
    echo "<br>";
    echo "<br>";
    echo "Ordenat alfabèticament: "."<br>";
    echo asort($noms);
    foreach($noms as $x)
    {
    echo "Nom=" . $x;
    echo "<br>";
    }
    echo "<br>";
    echo "Array ordenat alrevés: ". array_reverse($noms);
    echo "<br>";
    echo "<br>";
    echo "Posició del meu nom en el array: ". array_search("Jordi",$noms);
    echo "<br>";
    echo "<br>";
    echo "Llista del array: "."<br>";
        /*function mostrar_array($noms)
    { }*/
        foreach($noms as $y)
        {
        echo "-Nom=" . $y;
        echo "<br>";
        }
    //Crea un array d'alumnes on cada element siga un altre array que continga el dni, nom i edat de l'alumne.
    $noms = array("Mauro"=>"21806677E", "Jordi"=>"21806674E", "Paula"=>"21806675E", "Sara"=>"21806617E", "Juan"=>"21806687E", "Saul"=>"21806674Y", "Domingo"=>"21806670E");
    ?>
<html>
<table class="taula">
    <tr>

    <td>Nom 1</td>

    <td>Nom 2</td>

    <td>Nom 3</td>

    <td>Nom 4</td>

    <td>Nom 5</td>

    <td>Nom 6</td>

    <td>Nom 7</td>

    </tr>

</table>


</html>