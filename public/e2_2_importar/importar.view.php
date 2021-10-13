<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atl Madrid</title>

</head>

<body>
    <header>
        <h1>
            <?= $greetins ?>
        </h1>

    </header>
    <table>
        <tr>
            <th>Nom</th>
            <th>Edat</th>
            <th>Pais</th>
            <th>Dorsal</th>
            <th>Posicio</th>
            <th>Gols</th>
        </tr>
        <?php foreach ($planter as $jugador) : ?>
            <tr>
                <?php foreach ($jugador as $caracteristica) : ?>
                    <td><?= $caracteristica ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>