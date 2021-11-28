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
    
    <?php foreach($planter as $jugador): ?>
        <tr>
        <?php foreach($jugador as $caracteristica): ?>
            <td><?= $caracteristica ?></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>