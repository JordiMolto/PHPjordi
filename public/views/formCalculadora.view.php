<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>
    <header>
        <h2>Calculadora</h2>
    </header>

    <form action="formCalculadora.php" method="post">
        <input type="text" name="numA" />
        <select name="operation">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacio">multiplicació</option>
            <option value="divisio">divisió</option>
        </select>
        <input type="text" name="numB" />
        <input type="submit" value="=" />
    </form>
    <?php
     $resultat??''
    ?>
</body>

</html>