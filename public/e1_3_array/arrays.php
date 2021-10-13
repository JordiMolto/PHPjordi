<?php

$noms = ['Rodrigo', 'Jordi', 'Pablo', 'Marta', 'Saúl', 'Sara', 'Raúl', 'Xavi', 'Pedro', 'Sandra', 'Yolanda', 'Adrián'];
$noms_ordenada = $noms;

function mostrar_array($array): String
{
    $cadena = "<ul>";
    foreach ($array as $persones) {
        $cadena .= "<li>$persones</li>";
    }
    return $cadena . "</ul>";
}

echo 'Numero de Noms en el array: ' . count($noms) . '<br/><br/>';
echo 'Array separat per un espai: ' . implode(' ', $noms) . '<br/><br/>';
asort($noms_ordenada);
echo 'Ordenat alfabeticament: ' . mostrar_array($noms_ordenada);
echo 'Ordenat a la inversa: ' . mostrar_array(array_reverse($noms));
echo 'El meu nom (Jordi) està a la posició: ' . array_search('Jordi', $noms) . '<br/><br/>';

/* Alumnes */

$alumnes = [
    [
        'dni' => '2412412324',
        'nom' => 'Sergio Hernandez',
        'edat' => '20'
    ],
    [
        'dni' => '6785685678',
        'nom' => 'Kevin San Juan',
        'edat' => '49'
    ],
];

?>

<table>
    <caption>Alumnes</caption>
    <?php foreach ($alumnes as $key => $alumne) :
        if ($key == 0) :
            $indices = array_keys($alumne);
    ?>
            <tr>
                <?php foreach ($indices as $feature) : ?>
                    <th><?= $feature ?></th>
                <?php endforeach; ?>
            </tr>
        <?php endif; ?>
        <tr>
            <?php foreach ($alumne as $value) : ?>
                <td><?= $value ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>


<?php

/* Traduccions */

echo "Array associatiu";
$traduccions  = array(
    'House' => 'Casa',
    'Cat' => 'Gat',
    'Dog' => 'Gos',
    'Rabbit' => 'Conill',
    'Chicken' => 'Pollastre',
    'Pig' => 'Porc',
    'Butterfly' => 'Papallona',
    'Bird' => 'Pardal',
    'Elephant' => 'Elefant',
    'Fish' => 'Peix',
);

foreach ($traduccions as $paraula => $traduccion) {
    echo "$paraula -> $traduccion <br>";
}
echo "</p>";
?>